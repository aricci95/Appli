<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_5939495bdba889d3ff662545acdc1e53f0855515e08a69d73b827b21e5c98d47 extends Twig_Template
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
        $__internal_461e1c7190fa91caa4a84b17fe5d57214c1fb9bee63e1a845e63a2a50c44f8df = $this->env->getExtension("native_profiler");
        $__internal_461e1c7190fa91caa4a84b17fe5d57214c1fb9bee63e1a845e63a2a50c44f8df->enter($__internal_461e1c7190fa91caa4a84b17fe5d57214c1fb9bee63e1a845e63a2a50c44f8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_461e1c7190fa91caa4a84b17fe5d57214c1fb9bee63e1a845e63a2a50c44f8df->leave($__internal_461e1c7190fa91caa4a84b17fe5d57214c1fb9bee63e1a845e63a2a50c44f8df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
