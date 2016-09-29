<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_e365bdf3c4b4e4f7fd4f64806dd0a327df24d4fcd46c97d25da41c03bce71f4f extends Twig_Template
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
        $__internal_baed8fc7670d98f424cd79fbc49546f2ccef2a558eb55fe4e3e1471d953d3e1d = $this->env->getExtension("native_profiler");
        $__internal_baed8fc7670d98f424cd79fbc49546f2ccef2a558eb55fe4e3e1471d953d3e1d->enter($__internal_baed8fc7670d98f424cd79fbc49546f2ccef2a558eb55fe4e3e1471d953d3e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_baed8fc7670d98f424cd79fbc49546f2ccef2a558eb55fe4e3e1471d953d3e1d->leave($__internal_baed8fc7670d98f424cd79fbc49546f2ccef2a558eb55fe4e3e1471d953d3e1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}
