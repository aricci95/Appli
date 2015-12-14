<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_a9543409b814cedc6c1932aa3244de1f5d38c589ac7b5d4d90e35a6d080994ce extends Twig_Template
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
        $__internal_254a26d930487590c9bee7c9d5fab13e23b38da05ff59c1729d6d9e0f1f5c917 = $this->env->getExtension("native_profiler");
        $__internal_254a26d930487590c9bee7c9d5fab13e23b38da05ff59c1729d6d9e0f1f5c917->enter($__internal_254a26d930487590c9bee7c9d5fab13e23b38da05ff59c1729d6d9e0f1f5c917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_254a26d930487590c9bee7c9d5fab13e23b38da05ff59c1729d6d9e0f1f5c917->leave($__internal_254a26d930487590c9bee7c9d5fab13e23b38da05ff59c1729d6d9e0f1f5c917_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
