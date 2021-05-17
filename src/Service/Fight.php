<?php

namespace App\Service;

class Fight
{
    public function winCondition(Fighter $robot1, Fighter $robot2, Monster $enemy)
    {
        if ($robot1->getLife() === 0 && $robot2->getLife() === 0) {
            session_destroy();
            header('Location: /Home/gameover');
        } elseif ($enemy->getlife() === 0) {
            if ($_SESSION['progression'] < 10) {
                header('Location: /victory/index');
                exit();
            } else {
                header('Location: /victory/discussTesla');
                exit();
            }
        }
    }

    public function serialize($robot1, $robot2, $enemy): void
    {
        $_SESSION['percy'] = serialize($robot1);
        $_SESSION['ginny'] = serialize($robot2);
        $_SESSION['enemy'] = serialize($enemy);
    }

    public function unSerialize(): array
    {
        $robot1 = unserialize($_SESSION['percy']);
        $robot2 = unserialize($_SESSION['ginny']);
        $enemy = unserialize($_SESSION['enemy']);
        $fighters = ['percy' => $robot1, 'ginny' => $robot2,'enemy' => $enemy];
        return $fighters;
    }
}
