<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b2a8084f91a173392dc9a4c4b9ad4ef1f3bb74646b89f542a7a3883bfc9338c2 extends Twig_Template
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
        $__internal_20134adb43eb5c9e388105c9ba2799093e79c04acfc481a32a2a89e62948b171 = $this->env->getExtension("native_profiler");
        $__internal_20134adb43eb5c9e388105c9ba2799093e79c04acfc481a32a2a89e62948b171->enter($__internal_20134adb43eb5c9e388105c9ba2799093e79c04acfc481a32a2a89e62948b171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_20134adb43eb5c9e388105c9ba2799093e79c04acfc481a32a2a89e62948b171->leave($__internal_20134adb43eb5c9e388105c9ba2799093e79c04acfc481a32a2a89e62948b171_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
    }
}
