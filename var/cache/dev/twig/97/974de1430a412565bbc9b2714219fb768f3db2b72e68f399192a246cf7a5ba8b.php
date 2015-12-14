<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_5c9228d8926c38d73738cc155ca5e4ee9348fff45b0f1f004dbe8f6e0ba49720 extends Twig_Template
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
        $__internal_73d8c8e95b0dfb647492eae24ef173fec3bc79112dcbaf0234475a7f6b7f754d = $this->env->getExtension("native_profiler");
        $__internal_73d8c8e95b0dfb647492eae24ef173fec3bc79112dcbaf0234475a7f6b7f754d->enter($__internal_73d8c8e95b0dfb647492eae24ef173fec3bc79112dcbaf0234475a7f6b7f754d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_73d8c8e95b0dfb647492eae24ef173fec3bc79112dcbaf0234475a7f6b7f754d->leave($__internal_73d8c8e95b0dfb647492eae24ef173fec3bc79112dcbaf0234475a7f6b7f754d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
