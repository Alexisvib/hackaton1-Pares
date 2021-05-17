<?php

namespace App\Controller;

class MappingController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('Mapping/index.html.twig');
    }
}
