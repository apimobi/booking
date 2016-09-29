<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_268d526723848a3fa099c887e5586a2f98e056a2ac583840e22f846ceae0ce73 extends Twig_Template
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
        $__internal_b5d910b78bca40814b35bd146dc1a2101f3c83914c5222da6fef35f5de5e1504 = $this->env->getExtension("native_profiler");
        $__internal_b5d910b78bca40814b35bd146dc1a2101f3c83914c5222da6fef35f5de5e1504->enter($__internal_b5d910b78bca40814b35bd146dc1a2101f3c83914c5222da6fef35f5de5e1504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_b5d910b78bca40814b35bd146dc1a2101f3c83914c5222da6fef35f5de5e1504->leave($__internal_b5d910b78bca40814b35bd146dc1a2101f3c83914c5222da6fef35f5de5e1504_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }
}
