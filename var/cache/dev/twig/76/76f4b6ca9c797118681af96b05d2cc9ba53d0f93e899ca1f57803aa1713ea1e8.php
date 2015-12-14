<?php

/* default/form.html.twig */
class __TwigTemplate_42dac7a0d9b8f0965d12456dfb708ca03ad695109a462843dd0291fcee2e1942 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/form.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e4bf95ddf2d379883a2953528c8c9d896c6651c6360aaadddaa8d01e0174513 = $this->env->getExtension("native_profiler");
        $__internal_2e4bf95ddf2d379883a2953528c8c9d896c6651c6360aaadddaa8d01e0174513->enter($__internal_2e4bf95ddf2d379883a2953528c8c9d896c6651c6360aaadddaa8d01e0174513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e4bf95ddf2d379883a2953528c8c9d896c6651c6360aaadddaa8d01e0174513->leave($__internal_2e4bf95ddf2d379883a2953528c8c9d896c6651c6360aaadddaa8d01e0174513_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d72bf16f25050eb66d47a4a4363d94b002508c2688c741150218f6f23f1db61 = $this->env->getExtension("native_profiler");
        $__internal_8d72bf16f25050eb66d47a4a4363d94b002508c2688c741150218f6f23f1db61->enter($__internal_8d72bf16f25050eb66d47a4a4363d94b002508c2688c741150218f6f23f1db61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h1>
            </div>

            <div id=\"content\">
                ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_8d72bf16f25050eb66d47a4a4363d94b002508c2688c741150218f6f23f1db61->leave($__internal_8d72bf16f25050eb66d47a4a4363d94b002508c2688c741150218f6f23f1db61_prof);

    }

    public function getTemplateName()
    {
        return "default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <div id="welcome">*/
/*                 <h1>{{ title }}</h1>*/
/*             </div>*/
/* */
/*             <div id="content">*/
/*                 {{ form(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
