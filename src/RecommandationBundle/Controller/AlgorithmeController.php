<?php

namespace RecommandationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlgorithmeController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $ages = $em->getRepository('RecommandationBundle:Ages')
            ->findAllOrderedByName();
        return $this->render('RecommandationBundle:Default:algorithme.html.twig', array('ages' => $ages));
    }
}