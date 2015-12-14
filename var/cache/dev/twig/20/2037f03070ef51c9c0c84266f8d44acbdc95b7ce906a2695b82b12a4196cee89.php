<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_3aac8096ec6887e45e8e5d41f216071434c22702ac2825bba27df688a26ad466 extends Twig_Template
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
        $__internal_d41b192c607ac076fbc92260a7c9d0e87854c77baa912afa65ca513a96a32d2b = $this->env->getExtension("native_profiler");
        $__internal_d41b192c607ac076fbc92260a7c9d0e87854c77baa912afa65ca513a96a32d2b->enter($__internal_d41b192c607ac076fbc92260a7c9d0e87854c77baa912afa65ca513a96a32d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d41b192c607ac076fbc92260a7c9d0e87854c77baa912afa65ca513a96a32d2b->leave($__internal_d41b192c607ac076fbc92260a7c9d0e87854c77baa912afa65ca513a96a32d2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
