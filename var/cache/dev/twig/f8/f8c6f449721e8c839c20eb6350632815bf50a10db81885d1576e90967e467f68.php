<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_24a9274e7ee674f41a89e1a86ad47413b67982aab3b8bdce3140a2810f926699 extends Twig_Template
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
        $__internal_9b30311a84f81d3a1225b3f9a3ed628ada453cb11be525d325ae4c56e145dceb = $this->env->getExtension("native_profiler");
        $__internal_9b30311a84f81d3a1225b3f9a3ed628ada453cb11be525d325ae4c56e145dceb->enter($__internal_9b30311a84f81d3a1225b3f9a3ed628ada453cb11be525d325ae4c56e145dceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_9b30311a84f81d3a1225b3f9a3ed628ada453cb11be525d325ae4c56e145dceb->leave($__internal_9b30311a84f81d3a1225b3f9a3ed628ada453cb11be525d325ae4c56e145dceb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
