<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_84846591cec308783d9c3ad61e96dcf3e4c403792b66329ed16a695098a48274 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f4cdecda54268a20462093070bdf6b53363676b7a6e0608d0104c2cb79f28519 = $this->env->getExtension("native_profiler");
        $__internal_f4cdecda54268a20462093070bdf6b53363676b7a6e0608d0104c2cb79f28519->enter($__internal_f4cdecda54268a20462093070bdf6b53363676b7a6e0608d0104c2cb79f28519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4cdecda54268a20462093070bdf6b53363676b7a6e0608d0104c2cb79f28519->leave($__internal_f4cdecda54268a20462093070bdf6b53363676b7a6e0608d0104c2cb79f28519_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1cb7ffc7392ef84a4ec89b4218f384bb80afd5de26767135529a524f0c870c5b = $this->env->getExtension("native_profiler");
        $__internal_1cb7ffc7392ef84a4ec89b4218f384bb80afd5de26767135529a524f0c870c5b->enter($__internal_1cb7ffc7392ef84a4ec89b4218f384bb80afd5de26767135529a524f0c870c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1cb7ffc7392ef84a4ec89b4218f384bb80afd5de26767135529a524f0c870c5b->leave($__internal_1cb7ffc7392ef84a4ec89b4218f384bb80afd5de26767135529a524f0c870c5b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e41887ca28258bb51a3722aa5ebb3ba85aa38d6d54042c1de92e93af42e28eab = $this->env->getExtension("native_profiler");
        $__internal_e41887ca28258bb51a3722aa5ebb3ba85aa38d6d54042c1de92e93af42e28eab->enter($__internal_e41887ca28258bb51a3722aa5ebb3ba85aa38d6d54042c1de92e93af42e28eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e41887ca28258bb51a3722aa5ebb3ba85aa38d6d54042c1de92e93af42e28eab->leave($__internal_e41887ca28258bb51a3722aa5ebb3ba85aa38d6d54042c1de92e93af42e28eab_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a9b6da0a03241440f0ff0199b3b5147d71f181f74d04b985f4af3d00fa04081 = $this->env->getExtension("native_profiler");
        $__internal_1a9b6da0a03241440f0ff0199b3b5147d71f181f74d04b985f4af3d00fa04081->enter($__internal_1a9b6da0a03241440f0ff0199b3b5147d71f181f74d04b985f4af3d00fa04081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1a9b6da0a03241440f0ff0199b3b5147d71f181f74d04b985f4af3d00fa04081->leave($__internal_1a9b6da0a03241440f0ff0199b3b5147d71f181f74d04b985f4af3d00fa04081_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
