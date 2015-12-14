<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_714cf90623ab6a0af557c5b52f38347ad31587ab232ba53d094ab2979b061a87 extends Twig_Template
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
        $__internal_d1cbb541c505d61c00d78494ff8a76f4ab57beec54a30d3f19ab75aa3daa4e3c = $this->env->getExtension("native_profiler");
        $__internal_d1cbb541c505d61c00d78494ff8a76f4ab57beec54a30d3f19ab75aa3daa4e3c->enter($__internal_d1cbb541c505d61c00d78494ff8a76f4ab57beec54a30d3f19ab75aa3daa4e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d1cbb541c505d61c00d78494ff8a76f4ab57beec54a30d3f19ab75aa3daa4e3c->leave($__internal_d1cbb541c505d61c00d78494ff8a76f4ab57beec54a30d3f19ab75aa3daa4e3c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
