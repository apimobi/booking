<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_1ac9efae5a446c7a0af75b1c5da2d0173ad75a8d343f7c0de852115b7e35c5fe extends Twig_Template
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
        $__internal_89aa27f1121a15249c3f87e0d2bda9ee443748dacccdf5c59534e31ebc8a5311 = $this->env->getExtension("native_profiler");
        $__internal_89aa27f1121a15249c3f87e0d2bda9ee443748dacccdf5c59534e31ebc8a5311->enter($__internal_89aa27f1121a15249c3f87e0d2bda9ee443748dacccdf5c59534e31ebc8a5311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_89aa27f1121a15249c3f87e0d2bda9ee443748dacccdf5c59534e31ebc8a5311->leave($__internal_89aa27f1121a15249c3f87e0d2bda9ee443748dacccdf5c59534e31ebc8a5311_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}
