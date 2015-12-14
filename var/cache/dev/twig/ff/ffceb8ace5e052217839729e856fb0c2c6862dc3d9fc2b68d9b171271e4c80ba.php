<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_d505be3f776ee51be1afc15bb2de7059bad5f168a1674c432b8d1b08143fa87f extends Twig_Template
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
        $__internal_51fd4978ed2f09ffc2a6996c78b9b89fb37f7f6780187114de3d684577d3f9e1 = $this->env->getExtension("native_profiler");
        $__internal_51fd4978ed2f09ffc2a6996c78b9b89fb37f7f6780187114de3d684577d3f9e1->enter($__internal_51fd4978ed2f09ffc2a6996c78b9b89fb37f7f6780187114de3d684577d3f9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_51fd4978ed2f09ffc2a6996c78b9b89fb37f7f6780187114de3d684577d3f9e1->leave($__internal_51fd4978ed2f09ffc2a6996c78b9b89fb37f7f6780187114de3d684577d3f9e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
