<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_1cf135f1db05437bf8ca4e7206e848621af6a4d717c370670e601af3efd3d8f4 extends Twig_Template
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
        $__internal_66aefb73f7878f310f179f1d0e44abbe20caa9cf7b0c9619e31bf410dcd1a6ce = $this->env->getExtension("native_profiler");
        $__internal_66aefb73f7878f310f179f1d0e44abbe20caa9cf7b0c9619e31bf410dcd1a6ce->enter($__internal_66aefb73f7878f310f179f1d0e44abbe20caa9cf7b0c9619e31bf410dcd1a6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_66aefb73f7878f310f179f1d0e44abbe20caa9cf7b0c9619e31bf410dcd1a6ce->leave($__internal_66aefb73f7878f310f179f1d0e44abbe20caa9cf7b0c9619e31bf410dcd1a6ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}
