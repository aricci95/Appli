<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_195bf1f650eef3055f61bf491ea4cf3fd75ce95fc46440f160e06db5ac54f102 extends Twig_Template
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
        $__internal_cd5088be9e4b1cf162220eda935f616daf37f0fe70ff6a810cdca6f1772b2f93 = $this->env->getExtension("native_profiler");
        $__internal_cd5088be9e4b1cf162220eda935f616daf37f0fe70ff6a810cdca6f1772b2f93->enter($__internal_cd5088be9e4b1cf162220eda935f616daf37f0fe70ff6a810cdca6f1772b2f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cd5088be9e4b1cf162220eda935f616daf37f0fe70ff6a810cdca6f1772b2f93->leave($__internal_cd5088be9e4b1cf162220eda935f616daf37f0fe70ff6a810cdca6f1772b2f93_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
