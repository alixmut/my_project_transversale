<?php

namespace RecommandationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MovieListController extends Controller
{
    public function indexAction()
    {
        return $this->render('RecommandationBundle:Default:movie_list.html.twig');
    }
}