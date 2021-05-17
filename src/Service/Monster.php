<?php

namespace App\Service;

class Monster extends Fighter
{
    protected int $life;
    protected int $attack;

    public function monsterAttack(): int
    {
        $fightService = new Fight();
        $fighters = $fightService->unSerialize();
        $damage = rand(($this->getAttack() / 2), $this->getAttack());
        $fightService->serialize($fighters['percy'], $fighters['ginny'], $fighters['enemy']);
        return $damage;
    }

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
