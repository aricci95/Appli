<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_20520f5c43341309c8039a83e157469683439e01b4bb3a65c4fb2ab3b848a9bd extends Twig_Template
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
        $__internal_8a1d027e37ea1b579a558e03300c35bcfbb5bca010c30b68548e77676897229e = $this->env->getExtension("native_profiler");
        $__internal_8a1d027e37ea1b579a558e03300c35bcfbb5bca010c30b68548e77676897229e->enter($__internal_8a1d027e37ea1b579a558e03300c35bcfbb5bca010c30b68548e77676897229e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_8a1d027e37ea1b579a558e03300c35bcfbb5bca010c30b68548e77676897229e->leave($__internal_8a1d027e37ea1b579a558e03300c35bcfbb5bca010c30b68548e77676897229e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
