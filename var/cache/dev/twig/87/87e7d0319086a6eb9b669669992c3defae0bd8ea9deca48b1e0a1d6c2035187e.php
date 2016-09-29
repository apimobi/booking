<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_2f474837963fefe465f94a213aeaaba5eb00f3c29a347ee84191d7e602864636 extends Twig_Template
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
        $__internal_1da2854cd0b28451c3bc6fc915bc02234768e03d5b433586357130fbbe4e2289 = $this->env->getExtension("native_profiler");
        $__internal_1da2854cd0b28451c3bc6fc915bc02234768e03d5b433586357130fbbe4e2289->enter($__internal_1da2854cd0b28451c3bc6fc915bc02234768e03d5b433586357130fbbe4e2289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_1da2854cd0b28451c3bc6fc915bc02234768e03d5b433586357130fbbe4e2289->leave($__internal_1da2854cd0b28451c3bc6fc915bc02234768e03d5b433586357130fbbe4e2289_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
