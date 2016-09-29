<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_30cb7a706c4a36d254a4f98fb52d0fb51269b2bf034fc5787b1f3f7b1f001e27 extends Twig_Template
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
        $__internal_76041193015dcf9207daeb622f89beb532e2cd321c424e354b1db4ba7689b750 = $this->env->getExtension("native_profiler");
        $__internal_76041193015dcf9207daeb622f89beb532e2cd321c424e354b1db4ba7689b750->enter($__internal_76041193015dcf9207daeb622f89beb532e2cd321c424e354b1db4ba7689b750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_76041193015dcf9207daeb622f89beb532e2cd321c424e354b1db4ba7689b750->leave($__internal_76041193015dcf9207daeb622f89beb532e2cd321c424e354b1db4ba7689b750_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}
