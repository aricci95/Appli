<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;

class DefaultController extends Controller
{

    public function indexAction()
    {
        return $this->render(
            'default/index.html.twig', array('title' => 'Index')
        );
    }

    public function formAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
            echo $user->getUserLogin();
/*
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();*/
        }

        return $this->render(
            'default/form.html.twig', array('title' => 'Form', 'form' => $form->createView())
        );

    }

    public function listAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        // La méthode findAll retourne toutes les catégories de la base de données
        $users = $em->getRepository('AppBundle:User')->findAllOrderedByName();




        // replace this example code with whatever you need
        return $this->render(
            'default/list.html.twig', array('title' => 'List', 'users' => $users)
        );
    }
}
