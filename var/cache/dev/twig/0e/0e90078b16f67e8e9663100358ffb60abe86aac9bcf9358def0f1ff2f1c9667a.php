<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_20b538fdc7bd2068520590b75fd4249647a55a2fddd63b8b25b5d0e109ffce18 extends Twig_Template
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
        $__internal_3238faf1a1f8ce9a518a73a7a113a2b5566e76db90b884781912b1c212d46c79 = $this->env->getExtension("native_profiler");
        $__internal_3238faf1a1f8ce9a518a73a7a113a2b5566e76db90b884781912b1c212d46c79->enter($__internal_3238faf1a1f8ce9a518a73a7a113a2b5566e76db90b884781912b1c212d46c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3238faf1a1f8ce9a518a73a7a113a2b5566e76db90b884781912b1c212d46c79->leave($__internal_3238faf1a1f8ce9a518a73a7a113a2b5566e76db90b884781912b1c212d46c79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
