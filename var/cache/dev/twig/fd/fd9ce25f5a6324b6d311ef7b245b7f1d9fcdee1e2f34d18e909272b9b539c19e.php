<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4fcd7d8253d1308d78578895f721c74d584304e29824cd07e395c5aa82bd3501 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7cc56c488152d81473ebd2253d071f08ae1eb58b690454b6f4a2130dfa8ad052 = $this->env->getExtension("native_profiler");
        $__internal_7cc56c488152d81473ebd2253d071f08ae1eb58b690454b6f4a2130dfa8ad052->enter($__internal_7cc56c488152d81473ebd2253d071f08ae1eb58b690454b6f4a2130dfa8ad052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7cc56c488152d81473ebd2253d071f08ae1eb58b690454b6f4a2130dfa8ad052->leave($__internal_7cc56c488152d81473ebd2253d071f08ae1eb58b690454b6f4a2130dfa8ad052_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_27fd6df349ed9b7d81f8ece4c1094d92655040cc01588ea9fa775b1b7a8c8209 = $this->env->getExtension("native_profiler");
        $__internal_27fd6df349ed9b7d81f8ece4c1094d92655040cc01588ea9fa775b1b7a8c8209->enter($__internal_27fd6df349ed9b7d81f8ece4c1094d92655040cc01588ea9fa775b1b7a8c8209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_27fd6df349ed9b7d81f8ece4c1094d92655040cc01588ea9fa775b1b7a8c8209->leave($__internal_27fd6df349ed9b7d81f8ece4c1094d92655040cc01588ea9fa775b1b7a8c8209_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
