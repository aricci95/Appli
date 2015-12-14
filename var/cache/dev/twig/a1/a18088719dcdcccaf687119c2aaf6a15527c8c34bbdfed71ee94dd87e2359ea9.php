<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_e7b75af14c1b847d13d5e5b37cad60f713a05b4cdd46d38485b812852f8724ef extends Twig_Template
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
        $__internal_d671b5bf4b9cb35aa9232fc69d4220f556ae848283e389c1281236cfddb22931 = $this->env->getExtension("native_profiler");
        $__internal_d671b5bf4b9cb35aa9232fc69d4220f556ae848283e389c1281236cfddb22931->enter($__internal_d671b5bf4b9cb35aa9232fc69d4220f556ae848283e389c1281236cfddb22931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d671b5bf4b9cb35aa9232fc69d4220f556ae848283e389c1281236cfddb22931->leave($__internal_d671b5bf4b9cb35aa9232fc69d4220f556ae848283e389c1281236cfddb22931_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
