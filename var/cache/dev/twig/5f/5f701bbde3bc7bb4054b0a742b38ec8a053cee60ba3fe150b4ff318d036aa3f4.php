<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_4b48a6215049a4f431a9d978428ba9a62937787fc5a768b94aae85888ddeb699 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcbdc9ee0270f7e2fca563d404eb9b4a4c33c063e059c7ab08d46f1dfb5e2d32 = $this->env->getExtension("native_profiler");
        $__internal_fcbdc9ee0270f7e2fca563d404eb9b4a4c33c063e059c7ab08d46f1dfb5e2d32->enter($__internal_fcbdc9ee0270f7e2fca563d404eb9b4a4c33c063e059c7ab08d46f1dfb5e2d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_fcbdc9ee0270f7e2fca563d404eb9b4a4c33c063e059c7ab08d46f1dfb5e2d32->leave($__internal_fcbdc9ee0270f7e2fca563d404eb9b4a4c33c063e059c7ab08d46f1dfb5e2d32_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
