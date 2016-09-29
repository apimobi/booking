<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4780692ff20f2011073594e5a132e739e143dc706165482779864095f90cc85f extends Twig_Template
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
        $__internal_bad881b5b32c2a5071374ece0b79892293aaa7cd0f75091651ef85883967dca8 = $this->env->getExtension("native_profiler");
        $__internal_bad881b5b32c2a5071374ece0b79892293aaa7cd0f75091651ef85883967dca8->enter($__internal_bad881b5b32c2a5071374ece0b79892293aaa7cd0f75091651ef85883967dca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_bad881b5b32c2a5071374ece0b79892293aaa7cd0f75091651ef85883967dca8->leave($__internal_bad881b5b32c2a5071374ece0b79892293aaa7cd0f75091651ef85883967dca8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
