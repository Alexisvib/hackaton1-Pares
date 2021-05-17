<?php

namespace App\Service;

class Percy extends Fighter
{
    protected int $life;
    protected int $techno = 12;
    protected int $attack;

    public function laser(Fighter $target): void
    {
        $this->setTechno(-1);
        $damage = $this->getAttack() + $this->getAttack() * 0.2;
        $target->setLife($target->getLife() - $damage);
    }

    public function missile(Fighter $target): void
    {
        $this->setTechno(-2);
        $damage = $this->getAttack() + $this->getAttack() * 0.4;
        $target->setLife($target->getLife() - $damage);
    }

    public function tecktonikAttack(Fighter $target): void
    {
        $this->setTechno(-4);
        $damage = $this->getAttack() * 2;
        $target->setLife($target->getLife() - $damage);
    }

    public function asteroid(Fighter $target): void
    {
        $this->setTechno(-6);
        $damage =  $this->getAttack() * 6;
        $target->setLife($target->getLife() - $damage);
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
     * @return Percy
     */
    public function setLife(int $life): Percy
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
     * @return Percy
     */
    public function setTechno(int $techno): Percy
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
     * @return Percy
     */
    public function setAttack(int $attack): Percy
    {
        $this->attack = $attack;
        return $this;
    }
}
