<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_2248794641ae8fed3880a1c1ad0a4bcc4aee372dc614b5064216e57c9fb05404 extends Twig_Template
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
        $__internal_06b18d8d7ec60a3f3e4dd233fe83feda267fef5ebe3a91a7032e260f7e6ab837 = $this->env->getExtension("native_profiler");
        $__internal_06b18d8d7ec60a3f3e4dd233fe83feda267fef5ebe3a91a7032e260f7e6ab837->enter($__internal_06b18d8d7ec60a3f3e4dd233fe83feda267fef5ebe3a91a7032e260f7e6ab837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_06b18d8d7ec60a3f3e4dd233fe83feda267fef5ebe3a91a7032e260f7e6ab837->leave($__internal_06b18d8d7ec60a3f3e4dd233fe83feda267fef5ebe3a91a7032e260f7e6ab837_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
