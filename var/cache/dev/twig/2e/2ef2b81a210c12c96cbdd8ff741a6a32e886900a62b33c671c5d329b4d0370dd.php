<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7dfd82af4de339e5434d2df7863259989c51a191e6e2234e44a8207b18124280 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_251fac318e3f9318ebc87d302b05e35d1f4b3b739215a59ecd8537c857496a5e = $this->env->getExtension("native_profiler");
        $__internal_251fac318e3f9318ebc87d302b05e35d1f4b3b739215a59ecd8537c857496a5e->enter($__internal_251fac318e3f9318ebc87d302b05e35d1f4b3b739215a59ecd8537c857496a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_251fac318e3f9318ebc87d302b05e35d1f4b3b739215a59ecd8537c857496a5e->leave($__internal_251fac318e3f9318ebc87d302b05e35d1f4b3b739215a59ecd8537c857496a5e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_65358d11d47ab1c6127537c72a66538468a43ef34c5f5f13c4eb4f72eb5b8a9c = $this->env->getExtension("native_profiler");
        $__internal_65358d11d47ab1c6127537c72a66538468a43ef34c5f5f13c4eb4f72eb5b8a9c->enter($__internal_65358d11d47ab1c6127537c72a66538468a43ef34c5f5f13c4eb4f72eb5b8a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_65358d11d47ab1c6127537c72a66538468a43ef34c5f5f13c4eb4f72eb5b8a9c->leave($__internal_65358d11d47ab1c6127537c72a66538468a43ef34c5f5f13c4eb4f72eb5b8a9c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b23ed6023ee2e4de41ac85d40312eab0feb82e6ddc35a48d522ac0690508f3ee = $this->env->getExtension("native_profiler");
        $__internal_b23ed6023ee2e4de41ac85d40312eab0feb82e6ddc35a48d522ac0690508f3ee->enter($__internal_b23ed6023ee2e4de41ac85d40312eab0feb82e6ddc35a48d522ac0690508f3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b23ed6023ee2e4de41ac85d40312eab0feb82e6ddc35a48d522ac0690508f3ee->leave($__internal_b23ed6023ee2e4de41ac85d40312eab0feb82e6ddc35a48d522ac0690508f3ee_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
