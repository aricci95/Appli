<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_565b5bc9e13c1914836646374ffde214708119208231203936ec008dfb1f2f51 extends Twig_Template
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
        $__internal_aaf3e1cc3938c33e8e3c4b5276e222f0a3affc5705359184a8138c11db59123a = $this->env->getExtension("native_profiler");
        $__internal_aaf3e1cc3938c33e8e3c4b5276e222f0a3affc5705359184a8138c11db59123a->enter($__internal_aaf3e1cc3938c33e8e3c4b5276e222f0a3affc5705359184a8138c11db59123a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_aaf3e1cc3938c33e8e3c4b5276e222f0a3affc5705359184a8138c11db59123a->leave($__internal_aaf3e1cc3938c33e8e3c4b5276e222f0a3affc5705359184a8138c11db59123a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
