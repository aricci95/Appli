<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_702da1ff9b991408645c1010fe4e816011f9ad480c3bdba13c930699fbcfc9e7 extends Twig_Template
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
        $__internal_1b0c9914612bd4cc0afac422b82207a676faeeca435c29b9ca868f0097f37d38 = $this->env->getExtension("native_profiler");
        $__internal_1b0c9914612bd4cc0afac422b82207a676faeeca435c29b9ca868f0097f37d38->enter($__internal_1b0c9914612bd4cc0afac422b82207a676faeeca435c29b9ca868f0097f37d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1b0c9914612bd4cc0afac422b82207a676faeeca435c29b9ca868f0097f37d38->leave($__internal_1b0c9914612bd4cc0afac422b82207a676faeeca435c29b9ca868f0097f37d38_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
