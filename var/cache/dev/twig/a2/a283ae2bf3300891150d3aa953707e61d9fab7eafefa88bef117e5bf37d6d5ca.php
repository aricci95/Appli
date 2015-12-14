<?php

/* default/index.html.twig */
class __TwigTemplate_b6480044586ab7617573933277a736c78cd14eb849e5b6a85767db65c48e9e03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_1a0d527f9b3d2307045f5b00b691a85b5250e0e0c1585729a93669a11e17774e = $this->env->getExtension("native_profiler");
        $__internal_1a0d527f9b3d2307045f5b00b691a85b5250e0e0c1585729a93669a11e17774e->enter($__internal_1a0d527f9b3d2307045f5b00b691a85b5250e0e0c1585729a93669a11e17774e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a0d527f9b3d2307045f5b00b691a85b5250e0e0c1585729a93669a11e17774e->leave($__internal_1a0d527f9b3d2307045f5b00b691a85b5250e0e0c1585729a93669a11e17774e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b35166a31c7ceb80fa2583c9410661af504d8efaeca3f33a29eb88222d8f2593 = $this->env->getExtension("native_profiler");
        $__internal_b35166a31c7ceb80fa2583c9410661af504d8efaeca3f33a29eb88222d8f2593->enter($__internal_b35166a31c7ceb80fa2583c9410661af504d8efaeca3f33a29eb88222d8f2593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                INDEX ACTION
            </div>
        </div>
    </div>
";
        
        $__internal_b35166a31c7ceb80fa2583c9410661af504d8efaeca3f33a29eb88222d8f2593->leave($__internal_b35166a31c7ceb80fa2583c9410661af504d8efaeca3f33a29eb88222d8f2593_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 INDEX ACTION*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
