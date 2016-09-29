<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_b57156c60f48bce4a2e0ed444ceb7b2ff899dcdbb4b460f93a838a4255afd03e extends Twig_Template
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
        $__internal_093d64cab0b85a658e7c97c582b4de8c964ad3011cd738d00a725af9f7285627 = $this->env->getExtension("native_profiler");
        $__internal_093d64cab0b85a658e7c97c582b4de8c964ad3011cd738d00a725af9f7285627->enter($__internal_093d64cab0b85a658e7c97c582b4de8c964ad3011cd738d00a725af9f7285627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_093d64cab0b85a658e7c97c582b4de8c964ad3011cd738d00a725af9f7285627->leave($__internal_093d64cab0b85a658e7c97c582b4de8c964ad3011cd738d00a725af9f7285627_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}
