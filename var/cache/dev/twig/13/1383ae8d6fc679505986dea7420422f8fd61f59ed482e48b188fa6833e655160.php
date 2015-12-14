<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_c791f5d807a3cdcab3073075ddb856b3bce3814c911214160ed659e191eae3a3 extends Twig_Template
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
        $__internal_bfeda3654de00755a74740318e9ba869c03af9bcd5defba00c1b35b0675d4fef = $this->env->getExtension("native_profiler");
        $__internal_bfeda3654de00755a74740318e9ba869c03af9bcd5defba00c1b35b0675d4fef->enter($__internal_bfeda3654de00755a74740318e9ba869c03af9bcd5defba00c1b35b0675d4fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_bfeda3654de00755a74740318e9ba869c03af9bcd5defba00c1b35b0675d4fef->leave($__internal_bfeda3654de00755a74740318e9ba869c03af9bcd5defba00c1b35b0675d4fef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
