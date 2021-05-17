<?php

namespace App\Controller;

use App\Model\UserManager;
use App\Service\Ginny;
use App\Service\Monster;
use App\Service\Percy;

class VictoryController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('Victory/index.html.twig');
    }

    public function victoryNext()
    {
        $_SESSION['turn'] = 1;
        $_SESSION['maxlife_percy'] +=  $_POST['percy-life'];
        $_SESSION['maxlife_ginny'] +=  $_POST['ginny-life'];
        $_SESSION['atk_percy'] +=  $_POST['percy-atk'];
        $_SESSION['atk_ginny'] += $_POST['ginny-atk'];
        $_SESSION['atk_monster'] += 30;
        $_SESSION['maxlife_monster'] += 60;
        unset($_SESSION['enemy']);
        unset($_SESSION['percy']);
        unset($_SESSION['ginny']);
        $enemy = new Monster($_SESSION['maxlife_monster'], $_SESSION['atk_monster']);
        $percy = new Percy($_SESSION['maxlife_percy'], $_SESSION['atk_percy']);
        $ginny = new Ginny($_SESSION['maxlife_ginny'], $_SESSION['atk_ginny']);
        $_SESSION['percy'] = serialize($percy);
        $_SESSION['enemy'] = serialize($enemy);
        $_SESSION['ginny'] = serialize($ginny);
        $userManager = new UserManager();
        $userManager->updateProgression($_SESSION['id']);
        $_SESSION['progression'] += 1;
        header('Location: /mapping/index');
        exit();
    }

    public function discussTesla()
    {
        return $this->twig->render('/Victory/discussTesla.html.twig');
    }

    public function endgame()
    {
        return $this->twig->render('/Victory/endgame.html.twig');
    }
}
