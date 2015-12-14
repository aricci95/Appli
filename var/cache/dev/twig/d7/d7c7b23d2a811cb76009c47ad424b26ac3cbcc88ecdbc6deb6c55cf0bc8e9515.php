<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_dd917513e88679f3d42777c2c30cecb02013276a08ea06122c8cdf73c5886d20 extends Twig_Template
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
        $__internal_eadb4830634fe8cb31c0e92d16834d93ad7883771e561568c2c54540ec0ab839 = $this->env->getExtension("native_profiler");
        $__internal_eadb4830634fe8cb31c0e92d16834d93ad7883771e561568c2c54540ec0ab839->enter($__internal_eadb4830634fe8cb31c0e92d16834d93ad7883771e561568c2c54540ec0ab839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_eadb4830634fe8cb31c0e92d16834d93ad7883771e561568c2c54540ec0ab839->leave($__internal_eadb4830634fe8cb31c0e92d16834d93ad7883771e561568c2c54540ec0ab839_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
