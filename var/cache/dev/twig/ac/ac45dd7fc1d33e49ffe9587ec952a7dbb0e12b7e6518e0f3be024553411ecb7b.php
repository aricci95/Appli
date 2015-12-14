<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_ec08a4302114765749b8ac6cc1f56f7e8c4f26fc9778e25deff4a9a8db4ec132 extends Twig_Template
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
        $__internal_ea342a5151e509485efe8332a459bd05dd76e1763bc2bcfe9ab6ea1929b1656c = $this->env->getExtension("native_profiler");
        $__internal_ea342a5151e509485efe8332a459bd05dd76e1763bc2bcfe9ab6ea1929b1656c->enter($__internal_ea342a5151e509485efe8332a459bd05dd76e1763bc2bcfe9ab6ea1929b1656c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ea342a5151e509485efe8332a459bd05dd76e1763bc2bcfe9ab6ea1929b1656c->leave($__internal_ea342a5151e509485efe8332a459bd05dd76e1763bc2bcfe9ab6ea1929b1656c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
