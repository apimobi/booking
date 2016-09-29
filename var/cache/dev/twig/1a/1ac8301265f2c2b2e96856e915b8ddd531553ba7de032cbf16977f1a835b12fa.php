<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_1957497a92bdf885470fe0fd6edd937d6f8aa071775e731ccc9e0d943a910aac extends Twig_Template
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
        $__internal_fc6bd9057be33394901fb93fbccaba3aa1b5f0f6589aafcf713d45b6f8b80ab6 = $this->env->getExtension("native_profiler");
        $__internal_fc6bd9057be33394901fb93fbccaba3aa1b5f0f6589aafcf713d45b6f8b80ab6->enter($__internal_fc6bd9057be33394901fb93fbccaba3aa1b5f0f6589aafcf713d45b6f8b80ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_fc6bd9057be33394901fb93fbccaba3aa1b5f0f6589aafcf713d45b6f8b80ab6->leave($__internal_fc6bd9057be33394901fb93fbccaba3aa1b5f0f6589aafcf713d45b6f8b80ab6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
