<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_79cf28a05734a1cc36ed4b32a3503caa3ca0bb802e3eac8218f181ffb91d8e6f extends Twig_Template
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
        $__internal_dac7679ffcc7f9d2251644b987b6504f64b5258c36a977e61400ca0d2a6b7178 = $this->env->getExtension("native_profiler");
        $__internal_dac7679ffcc7f9d2251644b987b6504f64b5258c36a977e61400ca0d2a6b7178->enter($__internal_dac7679ffcc7f9d2251644b987b6504f64b5258c36a977e61400ca0d2a6b7178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_dac7679ffcc7f9d2251644b987b6504f64b5258c36a977e61400ca0d2a6b7178->leave($__internal_dac7679ffcc7f9d2251644b987b6504f64b5258c36a977e61400ca0d2a6b7178_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
