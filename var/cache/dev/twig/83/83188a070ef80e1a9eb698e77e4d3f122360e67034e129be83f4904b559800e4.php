<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_2622cf8687169d337acfadd99e7a1eafce065bed69d758abf679ac586ff6309d extends Twig_Template
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
        $__internal_2dd363c5c284c3f45d4979862af5149d6f740f984dbb96cf16d47016592ba91a = $this->env->getExtension("native_profiler");
        $__internal_2dd363c5c284c3f45d4979862af5149d6f740f984dbb96cf16d47016592ba91a->enter($__internal_2dd363c5c284c3f45d4979862af5149d6f740f984dbb96cf16d47016592ba91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_2dd363c5c284c3f45d4979862af5149d6f740f984dbb96cf16d47016592ba91a->leave($__internal_2dd363c5c284c3f45d4979862af5149d6f740f984dbb96cf16d47016592ba91a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
    }
}
