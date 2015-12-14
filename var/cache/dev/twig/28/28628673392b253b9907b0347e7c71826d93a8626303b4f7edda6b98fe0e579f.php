<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_4432ba1d12d6e9b6c2f7e5ab4cf4f377129f9666fdd2c5689fb2bba7d80741cf extends Twig_Template
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
        $__internal_7bb0e2fd72f67583649923e20d6334410d952dd651dc29a4fec0085d5764f19d = $this->env->getExtension("native_profiler");
        $__internal_7bb0e2fd72f67583649923e20d6334410d952dd651dc29a4fec0085d5764f19d->enter($__internal_7bb0e2fd72f67583649923e20d6334410d952dd651dc29a4fec0085d5764f19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_7bb0e2fd72f67583649923e20d6334410d952dd651dc29a4fec0085d5764f19d->leave($__internal_7bb0e2fd72f67583649923e20d6334410d952dd651dc29a4fec0085d5764f19d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
