<?php

namespace App\Service;

class Fighter
{
    protected int $life;
    protected int $techno = 12;
    protected int $attack;


    public function __construct(int $life, int $attack)
    {
        $this->life = $life;
        $this->attack = $attack;
    }

    public function fight(Fighter $target): void
    {
        $damage = rand(($this->getAttack() / 2), $this->getAttack());
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
     * @return Fighter
     */
    public function setLife(int $life): Fighter
    {
        if ($life < 0) {
            $life = 0;
        }
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
     * @return Fighter
     */
    public function setTechno(int $techno): Fighter
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
     * @return Fighter
     */
    public function setAttack(int $attack): Fighter
    {
        $this->attack = $attack;
        return $this;
    }
}
