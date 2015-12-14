<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5568f30092583fd80fadc8236021654ebdf79c4d5f4af56bc13af3ded72a3451 extends Twig_Template
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
        $__internal_9fff455b72f2e919d29b6a4fe9bcce2727d53dfdb09bc06051c69755e2cc4385 = $this->env->getExtension("native_profiler");
        $__internal_9fff455b72f2e919d29b6a4fe9bcce2727d53dfdb09bc06051c69755e2cc4385->enter($__internal_9fff455b72f2e919d29b6a4fe9bcce2727d53dfdb09bc06051c69755e2cc4385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9fff455b72f2e919d29b6a4fe9bcce2727d53dfdb09bc06051c69755e2cc4385->leave($__internal_9fff455b72f2e919d29b6a4fe9bcce2727d53dfdb09bc06051c69755e2cc4385_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
