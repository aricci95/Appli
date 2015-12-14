<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1a4b855ec8865ad1f7cd618bdc9dcff802789cc49dd774550b99e92dee3fcfba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f99e67d1b8a926dd60ccb8acb295f643a5993bb20ac69518310e1713e5efad6 = $this->env->getExtension("native_profiler");
        $__internal_4f99e67d1b8a926dd60ccb8acb295f643a5993bb20ac69518310e1713e5efad6->enter($__internal_4f99e67d1b8a926dd60ccb8acb295f643a5993bb20ac69518310e1713e5efad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f99e67d1b8a926dd60ccb8acb295f643a5993bb20ac69518310e1713e5efad6->leave($__internal_4f99e67d1b8a926dd60ccb8acb295f643a5993bb20ac69518310e1713e5efad6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8776a280ac7c37b9dfb1b0a9416b9c920f4c29f1f2121579af4f0293aeae4726 = $this->env->getExtension("native_profiler");
        $__internal_8776a280ac7c37b9dfb1b0a9416b9c920f4c29f1f2121579af4f0293aeae4726->enter($__internal_8776a280ac7c37b9dfb1b0a9416b9c920f4c29f1f2121579af4f0293aeae4726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8776a280ac7c37b9dfb1b0a9416b9c920f4c29f1f2121579af4f0293aeae4726->leave($__internal_8776a280ac7c37b9dfb1b0a9416b9c920f4c29f1f2121579af4f0293aeae4726_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_92cc8c69357a21f966d208b7057a4c155d6761827ca912aeeade7dad43aae1b3 = $this->env->getExtension("native_profiler");
        $__internal_92cc8c69357a21f966d208b7057a4c155d6761827ca912aeeade7dad43aae1b3->enter($__internal_92cc8c69357a21f966d208b7057a4c155d6761827ca912aeeade7dad43aae1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_92cc8c69357a21f966d208b7057a4c155d6761827ca912aeeade7dad43aae1b3->leave($__internal_92cc8c69357a21f966d208b7057a4c155d6761827ca912aeeade7dad43aae1b3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_23c8c2f8feffabb3413054c57509e3ad8399c55f35062415084cce5d3cfe6e0a = $this->env->getExtension("native_profiler");
        $__internal_23c8c2f8feffabb3413054c57509e3ad8399c55f35062415084cce5d3cfe6e0a->enter($__internal_23c8c2f8feffabb3413054c57509e3ad8399c55f35062415084cce5d3cfe6e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_23c8c2f8feffabb3413054c57509e3ad8399c55f35062415084cce5d3cfe6e0a->leave($__internal_23c8c2f8feffabb3413054c57509e3ad8399c55f35062415084cce5d3cfe6e0a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
