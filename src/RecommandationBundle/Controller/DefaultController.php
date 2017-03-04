<?php

namespace RecommandationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RecommandationBundle:Default:index.html.twig');
    }
}
