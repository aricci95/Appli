<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_23f6ae89b0b8a2afb0504e1b4a2649b5948aef6acf0e34bd5e89fe0dc8bd1b79 extends Twig_Template
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
        $__internal_496fa528c5119701ee435272f69aa5e3c175838b17a592b76fb74cda64cb324e = $this->env->getExtension("native_profiler");
        $__internal_496fa528c5119701ee435272f69aa5e3c175838b17a592b76fb74cda64cb324e->enter($__internal_496fa528c5119701ee435272f69aa5e3c175838b17a592b76fb74cda64cb324e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_496fa528c5119701ee435272f69aa5e3c175838b17a592b76fb74cda64cb324e->leave($__internal_496fa528c5119701ee435272f69aa5e3c175838b17a592b76fb74cda64cb324e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
