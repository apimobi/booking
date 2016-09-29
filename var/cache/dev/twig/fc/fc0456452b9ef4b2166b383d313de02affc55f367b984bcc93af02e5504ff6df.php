<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_08490ed3c6ac85efc3f9189ef87fb919c58ce1061daf677da933ae43bff3a5a1 extends Twig_Template
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
        $__internal_4c68afecfd013f577dd131e84925eefb54a74bc06db5d06f82fea5a556279e81 = $this->env->getExtension("native_profiler");
        $__internal_4c68afecfd013f577dd131e84925eefb54a74bc06db5d06f82fea5a556279e81->enter($__internal_4c68afecfd013f577dd131e84925eefb54a74bc06db5d06f82fea5a556279e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4c68afecfd013f577dd131e84925eefb54a74bc06db5d06f82fea5a556279e81->leave($__internal_4c68afecfd013f577dd131e84925eefb54a74bc06db5d06f82fea5a556279e81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
    }
}
