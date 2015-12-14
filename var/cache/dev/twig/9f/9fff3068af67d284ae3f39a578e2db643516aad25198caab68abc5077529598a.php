<?php

/* base.html.twig */
class __TwigTemplate_cc4a8c3d646f8349f8083ff83dd58321d6519ce01de4a64f3adf43ade6a4160b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d51bb1a53ee3b4ab1ed91450560d0847cf93942c7685eb8cd02552797bb4ff89 = $this->env->getExtension("native_profiler");
        $__internal_d51bb1a53ee3b4ab1ed91450560d0847cf93942c7685eb8cd02552797bb4ff89->enter($__internal_d51bb1a53ee3b4ab1ed91450560d0847cf93942c7685eb8cd02552797bb4ff89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link href=\"../../web/bundles/Appli/css/main.css\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"../../web/bundles/Appli/css/blablacar.css\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"../../web/bundles/Appli/css/appli.css\" rel=\"stylesheet\" type=\"text/css\">
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <header class=\"site-header\" role=\"banner\">
            <div class=\"container clearfix\">
                <a href=\"/\" class=\"logo\">
                    <img src=\"https://d1ovtcjitiy70m.cloudfront.net/vi-1/images/blablacar-logo-290x48.png\" width=\"145\" height=\"24\" alt=\"BlaBlaCar\">
                </a>
            </div>
        </header>

        <div id=\"maincontent\" class=\"container\" role=\"main\">
            <div class=\"flash-template alert no-icon hide clearfix\" data-level-class=\"alert-LEVEL\" data-message-selector=\".flash-content\"></div>
            <div class=\"search-in\">
                <div class=\"trip-search-form search-form search-container\">
                    By Antoine Ricci (aricci95@gmail.com)
                </div>
            </div>
            <div id=\"search-layout\" class=\"row\">
                <div class=\"span3\">
                    <div id=\"search-facets\" class=\"main-column form-container trip-search-facets clearfix\">
                        <div class=\"main-column-block\" data-tracker=\"seats-facet\">
                    <span class=\"sprite ui-checkbox pull-left\"></span>
                    <span class=\"facet-label\">
                        <!-- MENU -->
                        <table>
                            <tr>
                                <th><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getUrl("default_homepage");
        echo "\">Index</a></th>
                            </tr>
                            <tr>
                                <th><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getUrl("default_list");
        echo "\">List</a></th>
                            </tr>
                            <tr>
                                <th><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getUrl("default_form");
        echo "\">Form</a></th>
                            </tr>
                            <tr>
                                <th>Menu3</th>
                            </tr>
                        </table>
                    </span>
                </div>
                </div>
            </div>
                <div class=\"span9\">
                    ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "                </div>
        </div>
    </body>
</html>
";
        
        $__internal_d51bb1a53ee3b4ab1ed91450560d0847cf93942c7685eb8cd02552797bb4ff89->leave($__internal_d51bb1a53ee3b4ab1ed91450560d0847cf93942c7685eb8cd02552797bb4ff89_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_89694759ff8c04ad1cdecc62e099f7dd47adf6d2d03274581c0d564220f53ef9 = $this->env->getExtension("native_profiler");
        $__internal_89694759ff8c04ad1cdecc62e099f7dd47adf6d2d03274581c0d564220f53ef9->enter($__internal_89694759ff8c04ad1cdecc62e099f7dd47adf6d2d03274581c0d564220f53ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BlaBlaTest - Antoine Ricci";
        
        $__internal_89694759ff8c04ad1cdecc62e099f7dd47adf6d2d03274581c0d564220f53ef9->leave($__internal_89694759ff8c04ad1cdecc62e099f7dd47adf6d2d03274581c0d564220f53ef9_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1f68009bf65aa0de2638f853ed0b82957a840a30b5a3fe707d260227f2180e27 = $this->env->getExtension("native_profiler");
        $__internal_1f68009bf65aa0de2638f853ed0b82957a840a30b5a3fe707d260227f2180e27->enter($__internal_1f68009bf65aa0de2638f853ed0b82957a840a30b5a3fe707d260227f2180e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1f68009bf65aa0de2638f853ed0b82957a840a30b5a3fe707d260227f2180e27->leave($__internal_1f68009bf65aa0de2638f853ed0b82957a840a30b5a3fe707d260227f2180e27_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6a648426e83ee41bd97dc7191e20edebfd21e99f74b1bcbd727740bda74a12da = $this->env->getExtension("native_profiler");
        $__internal_6a648426e83ee41bd97dc7191e20edebfd21e99f74b1bcbd727740bda74a12da->enter($__internal_6a648426e83ee41bd97dc7191e20edebfd21e99f74b1bcbd727740bda74a12da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6a648426e83ee41bd97dc7191e20edebfd21e99f74b1bcbd727740bda74a12da->leave($__internal_6a648426e83ee41bd97dc7191e20edebfd21e99f74b1bcbd727740bda74a12da_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_63e0004946dbe67cfb379eabcaeabc9555719dd009c1988004eec88b28b23e51 = $this->env->getExtension("native_profiler");
        $__internal_63e0004946dbe67cfb379eabcaeabc9555719dd009c1988004eec88b28b23e51->enter($__internal_63e0004946dbe67cfb379eabcaeabc9555719dd009c1988004eec88b28b23e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_63e0004946dbe67cfb379eabcaeabc9555719dd009c1988004eec88b28b23e51->leave($__internal_63e0004946dbe67cfb379eabcaeabc9555719dd009c1988004eec88b28b23e51_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 55,  137 => 10,  126 => 9,  114 => 8,  103 => 56,  101 => 55,  87 => 44,  81 => 41,  75 => 38,  44 => 11,  41 => 10,  39 => 9,  35 => 8,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <link href="../../web/bundles/Appli/css/main.css" rel="stylesheet" type="text/css">*/
/*         <link href="../../web/bundles/Appli/css/blablacar.css" rel="stylesheet" type="text/css">*/
/*         <link href="../../web/bundles/Appli/css/appli.css" rel="stylesheet" type="text/css">*/
/*         <title>{% block title %}BlaBlaTest - Antoine Ricci{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <header class="site-header" role="banner">*/
/*             <div class="container clearfix">*/
/*                 <a href="/" class="logo">*/
/*                     <img src="https://d1ovtcjitiy70m.cloudfront.net/vi-1/images/blablacar-logo-290x48.png" width="145" height="24" alt="BlaBlaCar">*/
/*                 </a>*/
/*             </div>*/
/*         </header>*/
/* */
/*         <div id="maincontent" class="container" role="main">*/
/*             <div class="flash-template alert no-icon hide clearfix" data-level-class="alert-LEVEL" data-message-selector=".flash-content"></div>*/
/*             <div class="search-in">*/
/*                 <div class="trip-search-form search-form search-container">*/
/*                     By Antoine Ricci (aricci95@gmail.com)*/
/*                 </div>*/
/*             </div>*/
/*             <div id="search-layout" class="row">*/
/*                 <div class="span3">*/
/*                     <div id="search-facets" class="main-column form-container trip-search-facets clearfix">*/
/*                         <div class="main-column-block" data-tracker="seats-facet">*/
/*                     <span class="sprite ui-checkbox pull-left"></span>*/
/*                     <span class="facet-label">*/
/*                         <!-- MENU -->*/
/*                         <table>*/
/*                             <tr>*/
/*                                 <th><a href="{{ url('default_homepage') }}">Index</a></th>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <th><a href="{{ url('default_list') }}">List</a></th>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <th><a href="{{ url('default_form') }}">Form</a></th>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <th>Menu3</th>*/
/*                             </tr>*/
/*                         </table>*/
/*                     </span>*/
/*                 </div>*/
/*                 </div>*/
/*             </div>*/
/*                 <div class="span9">*/
/*                     {% block body %}{% endblock %}*/
/*                 </div>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
