<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_0d151e1a319a30b943d5c249e9eaf47ce9b4b9761b95c60c12629278a0e809fe extends Twig_Template
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
        $__internal_694f444daa7bd96a75e669b9ad5bc16f5398a8f63724bb678bf4efdde129d33b = $this->env->getExtension("native_profiler");
        $__internal_694f444daa7bd96a75e669b9ad5bc16f5398a8f63724bb678bf4efdde129d33b->enter($__internal_694f444daa7bd96a75e669b9ad5bc16f5398a8f63724bb678bf4efdde129d33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_694f444daa7bd96a75e669b9ad5bc16f5398a8f63724bb678bf4efdde129d33b->leave($__internal_694f444daa7bd96a75e669b9ad5bc16f5398a8f63724bb678bf4efdde129d33b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
