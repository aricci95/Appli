<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        // La m�thode findAll retourne toutes les cat�gories de la base de donn�es
        $users = $em->getRepository('AppBundle:User')->findByUserLogin(array('Lebowski', 'Tritt'));




        // replace this example code with whatever you need
        return $this->render(
            'default/index.html.twig', array('title' => 'Index', 'users' => $users)
        );
    }
}
