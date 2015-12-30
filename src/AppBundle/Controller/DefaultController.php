<?php

namespace AppBundle\Controller;

use AppBundle\Controller\AppController;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;

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

        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $this->growler('New entry saved.');
        }

        return $this->renderView(
            'AppBundle:default:form.html.twig', array(
                'form' => $form->createView(),
            )
        );

    }

    public function listAction()
    {
        $this->setViewTitle('List');
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('AppBundle:User')->findAll();

        return $this->renderView(
            'AppBundle:default:list.html.twig', array(
                'users' => $users,
            )
        );
    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:User')->find($id);
        $em->remove($user);
        $em->flush();

        return $this->redirectToRoute('default_list');
    }
}
