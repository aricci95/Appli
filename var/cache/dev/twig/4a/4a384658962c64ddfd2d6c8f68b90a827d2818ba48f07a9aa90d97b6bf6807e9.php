<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_44f3480ddf836316e4548a662fd0924de3cd41d22f668741f46b25f8a1aae610 extends Twig_Template
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
        $__internal_e2b263a89b0caa3bc184734351376ba4d49a85a5ea69d40335b481c4d7a4f6a4 = $this->env->getExtension("native_profiler");
        $__internal_e2b263a89b0caa3bc184734351376ba4d49a85a5ea69d40335b481c4d7a4f6a4->enter($__internal_e2b263a89b0caa3bc184734351376ba4d49a85a5ea69d40335b481c4d7a4f6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e2b263a89b0caa3bc184734351376ba4d49a85a5ea69d40335b481c4d7a4f6a4->leave($__internal_e2b263a89b0caa3bc184734351376ba4d49a85a5ea69d40335b481c4d7a4f6a4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
