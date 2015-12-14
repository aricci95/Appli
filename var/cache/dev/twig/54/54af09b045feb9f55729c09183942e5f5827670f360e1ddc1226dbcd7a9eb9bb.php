<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_872440f0f95df8ad1719c66d6d5eb9ed20098f6c13bcf138664dc67240502b55 extends Twig_Template
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
        $__internal_217ab612fae128ced025166324410d563a25530be211dab924a2f3e01ba0bbff = $this->env->getExtension("native_profiler");
        $__internal_217ab612fae128ced025166324410d563a25530be211dab924a2f3e01ba0bbff->enter($__internal_217ab612fae128ced025166324410d563a25530be211dab924a2f3e01ba0bbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_217ab612fae128ced025166324410d563a25530be211dab924a2f3e01ba0bbff->leave($__internal_217ab612fae128ced025166324410d563a25530be211dab924a2f3e01ba0bbff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
