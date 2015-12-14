<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_988f9d81404927075ae01d94b6b12f62e2372b03cd9c2342f8e9fd13d8519e88 extends Twig_Template
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
        $__internal_e7b5c4943f0137e7cdaa95be3afdce7825ce06a4c23495ef3d492d4be8e1befa = $this->env->getExtension("native_profiler");
        $__internal_e7b5c4943f0137e7cdaa95be3afdce7825ce06a4c23495ef3d492d4be8e1befa->enter($__internal_e7b5c4943f0137e7cdaa95be3afdce7825ce06a4c23495ef3d492d4be8e1befa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e7b5c4943f0137e7cdaa95be3afdce7825ce06a4c23495ef3d492d4be8e1befa->leave($__internal_e7b5c4943f0137e7cdaa95be3afdce7825ce06a4c23495ef3d492d4be8e1befa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
