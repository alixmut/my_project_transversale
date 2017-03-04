<?php

namespace RecommandationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MovieSingleController extends Controller
{
    public function indexAction()
    {
        return $this->render('RecommandationBundle:Default:single.html.twig');
    }
}