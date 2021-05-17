<?php

namespace App\Controller;

use _HumbugBox5ccdb2ccdb35\RingCentral\Psr7\ServerRequest;
use App\Service\Fight;
use App\Service\Fighter;
use App\Service\Percy;
use App\Service\Ginny;
use App\Service\Monster;

class Level5Controller extends AbstractController
{

    public function index5()
    {
        $fightService = new Fight();
        $fighters = $fightService->unSerialize();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $attackerName = $_POST['attacker'];
            // TODO si robot est mort, n'attaque pas mais turn +1 quand même
            $fighters[$attackerName]->fight($fighters['enemy']);

            if ($attackerName === 'ginny' && $fighters['enemy']->getLife() > 0) {
                $inputDamage = $fighters['enemy']->monsterAttack();
                $random = rand(1, 2);
                if ($random === 1) {
                    $defenser = $fighters['percy'];
                } else {
                    $defenser = $fighters['ginny'];
                }
                $defenser->setLife($defenser->getLife() - $inputDamage);
            }
            $fightService->winCondition($fighters['percy'], $fighters['ginny'], $fighters['enemy']);
        }
        if ($_SESSION['turn'] % 2 === 0) {
            $attacker = 'ginny';
        } else {
            $attacker = 'percy';
        }
        $_SESSION['turn'] += 1;
        $hpCharacters = [
            'percy' => $fighters['percy']->getLife(),
            'ginny' => $fighters['ginny']->getLife(),
            'enemy' => $fighters['enemy']->getLife(),
        ];
        $technoCharacters
            = [
            'percy' => $fighters['percy']->getTechno(),
            'ginny' => $fighters['ginny']->getTechno(),
        ];
        $fightService->serialize($fighters['percy'], $fighters['ginny'], $fighters['enemy']);
        return $this->twig->render('level/index5.html.twig', [
            'attacker' => $attacker,
            'hpCharacters' => $hpCharacters,
            'technoCharacters' => $technoCharacters
        ]);
    }

    public function technology5()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fightService = new Fight();
            $fighters = $fightService->unSerialize();

            $caster = $_POST['attacker'];
            $spell = $_POST['spell'];

            if ($spell === 'magicKiss' || $spell === 'eMcKiss') {
                $target = $_POST['target'];
                $healValue = $fighters[$caster]->$spell($target);
                $fighters[$target]->setLife($fighters[$target]->getLife() + $healValue);
                if ($fighters[$target] === 'percy') {
                    $maxHealValue = $_SESSION['maxlife_percy'];
                } else {
                    $maxHealValue = $_SESSION['maxlife_ginny'];
                }

                if ($fighters[$target]->getLife() > $maxHealValue) {
                    $fighters[$target]->setLife($maxHealValue);
                }
            } else {
                $fighters[$caster]->$spell($fighters['enemy']);
            }
            if ($caster === 'ginny' && $fighters['enemy']->getLife() > 0) {
                $inputDamage = $fighters['enemy']->monsterAttack();
                $random = rand(1, 2);
                if ($random === 1) {
                    $defenser = $fighters['percy'];
                } else {
                    $defenser = $fighters['ginny'];
                }
                $defenser->setLife($defenser->getLife() - $inputDamage);
            }

            if ($_SESSION['turn'] % 2 === 0) {
                $attacker = 'ginny';
            } else {
                $attacker = 'percy';
            }
            $_SESSION['turn'] += 1;
            $hpCharacters = [
                'percy' => $fighters['percy']->getLife(),
                'ginny' => $fighters['ginny']->getLife(),
                'enemy' => $fighters['enemy']->getLife(),
            ];
            $technoCharacters
                = [
                'percy' => $fighters['percy']->getTechno(),
                'ginny' => $fighters['ginny']->getTechno(),
            ];
            $fightService->winCondition($fighters['percy'], $fighters['ginny'], $fighters['enemy']);
            $fightService->serialize($fighters['percy'], $fighters['ginny'], $fighters['enemy']);
            return $this->twig->render('level/index5.html.twig', [
                'attacker' => $attacker,
                'hpCharacters' => $hpCharacters,
                'technoCharacters' => $technoCharacters
            ]);
        }
    }
}
