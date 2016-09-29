<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_d5b31b7e7a20c8b89c8d6bbe9715e0993b7759312ce75f943b7674100b198044 extends Twig_Template
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
        $__internal_91a2832deeb20fa248e8094545469b575af8b3559260d953f6ef2d876ddee803 = $this->env->getExtension("native_profiler");
        $__internal_91a2832deeb20fa248e8094545469b575af8b3559260d953f6ef2d876ddee803->enter($__internal_91a2832deeb20fa248e8094545469b575af8b3559260d953f6ef2d876ddee803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_91a2832deeb20fa248e8094545469b575af8b3559260d953f6ef2d876ddee803->leave($__internal_91a2832deeb20fa248e8094545469b575af8b3559260d953f6ef2d876ddee803_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
    }
}
