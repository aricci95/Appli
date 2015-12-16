<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Concert;
use AppBundle\Form\ConcertType;

class DefaultController extends Controller
{

    public function indexAction()
    {
        return $this->render(
            'AppBundle:default:index.html.twig', array('title' => 'Index')
        );
    }

    public function formAction(Request $request)
    {
        $concert = new Concert();
        $form = $this->createForm(ConcertType::class, $concert);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($concert);
            $em->flush();
            echo 'entry saved';
        }

        return $this->render(
            'AppBundle:default:form.html.twig', array('title' => 'Form', 'form' => $form->createView())
        );

    }

    public function listAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        // La méthode findAll retourne toutes les catégories de la base de données
        $users = $em->getRepository('AppBundle:User')->findAllOrderedByName();




        // replace this example code with whatever you need
        return $this->render(
            'AppBundle:default:list.html.twig', array('title' => 'List', 'users' => $users)
        );
    }
}
