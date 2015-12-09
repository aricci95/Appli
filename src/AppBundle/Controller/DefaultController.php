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

        // La méthode findAll retourne toutes les catégories de la base de données
        $users = $em->getRepository('AppBundle:User')->findByUserLogin(array('Lebowski', 'Tritt'));




        // replace this example code with whatever you need
        return $this->render(
            'default/index.html.twig', array('title' => 'Index', 'users' => $users)
        );
    }
}
