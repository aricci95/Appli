<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_a5fe00762674758234545b17bd7babf451f00121a02390405e85c49042405001 extends Twig_Template
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
        $__internal_d64d0b653146f9083bfe99f9eb2c2c5f2fb637cc9d6d2cc1289f48906e8955f4 = $this->env->getExtension("native_profiler");
        $__internal_d64d0b653146f9083bfe99f9eb2c2c5f2fb637cc9d6d2cc1289f48906e8955f4->enter($__internal_d64d0b653146f9083bfe99f9eb2c2c5f2fb637cc9d6d2cc1289f48906e8955f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_d64d0b653146f9083bfe99f9eb2c2c5f2fb637cc9d6d2cc1289f48906e8955f4->leave($__internal_d64d0b653146f9083bfe99f9eb2c2c5f2fb637cc9d6d2cc1289f48906e8955f4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
