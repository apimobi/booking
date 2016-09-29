<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_062c1b13b0a8d2f29e1422f4e15f7b44d831b8258685fc066758ab54c369e126 extends Twig_Template
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
        $__internal_cadab2e748b836ddf0e6f73b10d83a53deefad3a8b7bc418e1d22ef084b7386b = $this->env->getExtension("native_profiler");
        $__internal_cadab2e748b836ddf0e6f73b10d83a53deefad3a8b7bc418e1d22ef084b7386b->enter($__internal_cadab2e748b836ddf0e6f73b10d83a53deefad3a8b7bc418e1d22ef084b7386b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_cadab2e748b836ddf0e6f73b10d83a53deefad3a8b7bc418e1d22ef084b7386b->leave($__internal_cadab2e748b836ddf0e6f73b10d83a53deefad3a8b7bc418e1d22ef084b7386b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
    }
}
