<?php

/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

use App\Service\Fighter;
use App\Service\Ginny;
use App\Service\Monster;
use App\Service\Percy;

class HomeController extends AbstractController
{
    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        return $this->twig->render('Home/index.html.twig');
    }

    public function session()
    {
        return $this->twig->render('Home/session.html.twig');
    }
    public function sessionStart()
    {
        $_SESSION['turn'] = 1;
        //TODO à partir du niveau niveau tu as le maxlife et
        $percy = new Percy(100, 20);
        $ginny = new Ginny(100, 15);
        $enemy = new Monster(50, 40);
        $_SESSION['percy'] = serialize($percy);
        $_SESSION['enemy'] = serialize($enemy);
        $_SESSION['ginny'] = serialize($ginny);
        $_SESSION['maxlife_percy'] = 100;
        $_SESSION['maxlife_ginny'] = 100;
        $_SESSION['maxlife_monster'] = 50;
        $_SESSION['atk_percy'] = 100;
        $_SESSION['atk_ginny'] = 100;
        $_SESSION['atk_monster'] = 40;
        $_SESSION['progression'] = 1;
        header('Location: /home/introduction');
        exit;
    }

    public function sessionDestroy()
    {
        session_destroy();
        header('Location: /home/index');
        exit;
    }

    public function introduction()
    {
        return $this->twig->render('Home/introduction.html.twig');
    }

    public function gameover()
    {
        return $this->twig->render('Home/gameover.html.twig');
    }
}
