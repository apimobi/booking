<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_fe40eb1aaae6a6d4621bdf43b83bf93624ea2d0d575eecbca140143f2b831357 extends Twig_Template
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
        $__internal_7f1693726c1c1111f78b5f5410eecf2afe08791f27ee4ff3adad0f699bd039fc = $this->env->getExtension("native_profiler");
        $__internal_7f1693726c1c1111f78b5f5410eecf2afe08791f27ee4ff3adad0f699bd039fc->enter($__internal_7f1693726c1c1111f78b5f5410eecf2afe08791f27ee4ff3adad0f699bd039fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_7f1693726c1c1111f78b5f5410eecf2afe08791f27ee4ff3adad0f699bd039fc->leave($__internal_7f1693726c1c1111f78b5f5410eecf2afe08791f27ee4ff3adad0f699bd039fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
    }
}
