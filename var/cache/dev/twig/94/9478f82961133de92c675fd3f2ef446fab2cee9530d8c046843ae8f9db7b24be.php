<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_96abbff7c7b1377ebe83c59dfdb24a81804592653e9751d4658caabffc8cd6a7 extends Twig_Template
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
        $__internal_64a626878262f8b7da55350aeae02e587b681063024f964ee8ed128dc1e20a90 = $this->env->getExtension("native_profiler");
        $__internal_64a626878262f8b7da55350aeae02e587b681063024f964ee8ed128dc1e20a90->enter($__internal_64a626878262f8b7da55350aeae02e587b681063024f964ee8ed128dc1e20a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_64a626878262f8b7da55350aeae02e587b681063024f964ee8ed128dc1e20a90->leave($__internal_64a626878262f8b7da55350aeae02e587b681063024f964ee8ed128dc1e20a90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
    }
}
