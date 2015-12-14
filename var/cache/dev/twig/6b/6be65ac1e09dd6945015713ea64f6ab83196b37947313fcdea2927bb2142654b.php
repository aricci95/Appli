<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_7177e2f27143433a9e7879879e69b8a2b77021dcea9f92a09d07173c6e6f9576 extends Twig_Template
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
        $__internal_29744f618143bb91a7c7bec8243700f97aebcd5e72585d2b53ce61efb73bf35d = $this->env->getExtension("native_profiler");
        $__internal_29744f618143bb91a7c7bec8243700f97aebcd5e72585d2b53ce61efb73bf35d->enter($__internal_29744f618143bb91a7c7bec8243700f97aebcd5e72585d2b53ce61efb73bf35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_29744f618143bb91a7c7bec8243700f97aebcd5e72585d2b53ce61efb73bf35d->leave($__internal_29744f618143bb91a7c7bec8243700f97aebcd5e72585d2b53ce61efb73bf35d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
