<?php

namespace App\Service;

class Ginny extends Fighter
{
    public function magicKiss(string $target): int
    {
        $this->setTechno(-1);
        if ($target === 'percy') {
            $healValue = $_SESSION['maxlife_percy'] * 0.3;
        } elseif ($target === 'ginny') {
            $healValue = $_SESSION['maxlife_ginny'] * 0.3;
        }
        return intval($healValue);
    }

    public function rockDropper(Fighter $target): void
    {
        $this->setTechno(-2);
        $damage = $this->getAttack() + $this->getAttack() * 0.2;
        $target->setLife($target->getLife() - $damage);
    }
    public function martianTornado(Fighter $target)
    {
        $this->setTechno(-4);
        $damage = $this->getAttack() + $this->getAttack() * 0.6;
        $target->setLife($target->getLife() - $damage);
    }
    public function eMcKiss(string $target): int
    {
        $this->setTechno(-6);
        if ($target === 'percy') {
            $healValue = $_SESSION['maxlife_percy'];
        } elseif ($target === 'ginny') {
            $healValue = $_SESSION['maxlife_ginny'];
        }
        return intval($healValue);
    }

    /**
     * @return int
     */
    public function getLife(): int
    {
        return $this->life;
    }

    /**
     * @param int $life
     * @return Ginny
     */
    public function setLife(int $life): Ginny
    {
        $this->life = $life;
        return $this;
    }

    /**
     * @return int
     */
    public function getTechno(): int
    {
        return $this->techno;
    }

    /**
     * @param int $techno
     * @return Ginny
     */
    public function setTechno(int $techno): Ginny
    {
        $this->techno = $techno;
        return $this;
    }

    /**
     * @return int
     */
    public function getAttack(): int
    {
        return $this->attack;
    }

    /**
     * @param int $attack
     * @return Ginny
     */
    public function setAttack(int $attack): Ginny
    {
        $this->attack = $attack;
        return $this;
    }
}
