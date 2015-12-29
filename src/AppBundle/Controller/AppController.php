<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AppController extends Controller
{

    private $_growler_messages = array();
    protected $vars = array();
    public $view_title;

    public function renderView($view, array $parameters = array(), Symfony\Component\HttpFoundation\Response $response = NULL)
    {
        $this->vars = array_merge($this->vars, $parameters);
        $this->vars['title'] = $this->view_title;
        $this->vars['growler_messages'] = $this->_growler_messages;

        return $this->render($view, $this->vars, $response);
    }

    public function growler($message, $type = 'ok')
    {
        $this->_growler_messages[] = array('message' => $message, 'type' => $type);
    }

    public function setViewTitle($title)
    {
        $this->view_title = $title;
    }
}
