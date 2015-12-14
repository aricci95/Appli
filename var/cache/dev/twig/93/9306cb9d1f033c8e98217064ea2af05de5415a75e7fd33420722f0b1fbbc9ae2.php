<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_56330f60b23382e90c2a6382e6b67f384dad1026bf5158f305b1205e8037da57 extends Twig_Template
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
        $__internal_a0db1538e669653418909e5790a7d65d8fe78190318fb86d3d002813af4f46ae = $this->env->getExtension("native_profiler");
        $__internal_a0db1538e669653418909e5790a7d65d8fe78190318fb86d3d002813af4f46ae->enter($__internal_a0db1538e669653418909e5790a7d65d8fe78190318fb86d3d002813af4f46ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a0db1538e669653418909e5790a7d65d8fe78190318fb86d3d002813af4f46ae->leave($__internal_a0db1538e669653418909e5790a7d65d8fe78190318fb86d3d002813af4f46ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
