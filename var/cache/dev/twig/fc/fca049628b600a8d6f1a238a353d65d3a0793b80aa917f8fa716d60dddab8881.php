<?php

/* default/list.html.twig */
class __TwigTemplate_73009061d4a0f8e255a86bd6dc94b1f6a6136304f26286292505a786e92b672e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/list.html.twig", 1);
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
        $__internal_24543e57a4525149df31d9c99b6e60822b04ff645b34442a597b11b5978401ba = $this->env->getExtension("native_profiler");
        $__internal_24543e57a4525149df31d9c99b6e60822b04ff645b34442a597b11b5978401ba->enter($__internal_24543e57a4525149df31d9c99b6e60822b04ff645b34442a597b11b5978401ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24543e57a4525149df31d9c99b6e60822b04ff645b34442a597b11b5978401ba->leave($__internal_24543e57a4525149df31d9c99b6e60822b04ff645b34442a597b11b5978401ba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c40cd268b24742a4b6db86459b7439794fb7a6faf5d2df4a5115392b3dcfe9ea = $this->env->getExtension("native_profiler");
        $__internal_c40cd268b24742a4b6db86459b7439794fb7a6faf5d2df4a5115392b3dcfe9ea->enter($__internal_c40cd268b24742a4b6db86459b7439794fb7a6faf5d2df4a5115392b3dcfe9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <h1>Members</h1>
                <ul>
                    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 14
            echo "                        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "userLogin", array()), "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                </ul>
            </div>
        </div>
    </div>
";
        
        $__internal_c40cd268b24742a4b6db86459b7439794fb7a6faf5d2df4a5115392b3dcfe9ea->leave($__internal_c40cd268b24742a4b6db86459b7439794fb7a6faf5d2df4a5115392b3dcfe9ea_prof);

    }

    public function getTemplateName()
    {
        return "default/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  58 => 14,  54 => 13,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 <h1>Members</h1>*/
/*                 <ul>*/
/*                     {% for user in users %}*/
/*                         <li>{{ user.userLogin }}</li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
