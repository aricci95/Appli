<?php

namespace AppBundle\Controller;

use AppBundle\Controller\AppController;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Concert;
use AppBundle\Form\ConcertType;

class DefaultController extends AppController
{

    public function indexAction()
    {
        $this->setViewTitle('Index');

        return $this->renderView(
            'AppBundle:default:index.html.twig'
        );
    }

    public function formAction(Request $request)
    {
        $this->setViewTitle('Form');

        $concert = new Concert();
        $form = $this->createForm(ConcertType::class, $concert);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($concert);
            $em->flush();
            $this->growler('New entry saved.');
        }

        return $this->renderView(
            'AppBundle:default:form.html.twig', array(
                'form' => $form->createView(),
            )
        );

    }

    public function listAction(Request $request)
    {
        $this->setViewTitle('List');
        $em = $this->getDoctrine()->getManager();

        // La méthode findAll retourne toutes les catégories de la base de données
        $users = $em->getRepository('AppBundle:User')->findAllOrderedByName();

        // replace this example code with whatever you need
        return $this->renderView(
            'AppBundle:default:list.html.twig', array('users' => $users)
        );
    }
}
