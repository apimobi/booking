<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_51f2780c247ee436b7b85171aa4bc0216c2ddd8cd26001bf4a9a35d5fd441e5f extends Twig_Template
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
        $__internal_96a5f6f9b04e7c3d7df2c50c4eb70b79ab3765d501c3b2c5c56a211a78ed6067 = $this->env->getExtension("native_profiler");
        $__internal_96a5f6f9b04e7c3d7df2c50c4eb70b79ab3765d501c3b2c5c56a211a78ed6067->enter($__internal_96a5f6f9b04e7c3d7df2c50c4eb70b79ab3765d501c3b2c5c56a211a78ed6067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_96a5f6f9b04e7c3d7df2c50c4eb70b79ab3765d501c3b2c5c56a211a78ed6067->leave($__internal_96a5f6f9b04e7c3d7df2c50c4eb70b79ab3765d501c3b2c5c56a211a78ed6067_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
