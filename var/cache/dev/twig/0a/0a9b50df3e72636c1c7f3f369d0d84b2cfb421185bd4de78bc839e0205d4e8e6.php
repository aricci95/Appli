<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e82e5f096d4c5977c612e892c7a9486a2b8d233f72f7c79a90029994fdc120b4 extends Twig_Template
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
        $__internal_8655c371a0e4cdb4dfc9828b299b3d9f79fe492bcfc1e8125e09cf5afca41a84 = $this->env->getExtension("native_profiler");
        $__internal_8655c371a0e4cdb4dfc9828b299b3d9f79fe492bcfc1e8125e09cf5afca41a84->enter($__internal_8655c371a0e4cdb4dfc9828b299b3d9f79fe492bcfc1e8125e09cf5afca41a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8655c371a0e4cdb4dfc9828b299b3d9f79fe492bcfc1e8125e09cf5afca41a84->leave($__internal_8655c371a0e4cdb4dfc9828b299b3d9f79fe492bcfc1e8125e09cf5afca41a84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
