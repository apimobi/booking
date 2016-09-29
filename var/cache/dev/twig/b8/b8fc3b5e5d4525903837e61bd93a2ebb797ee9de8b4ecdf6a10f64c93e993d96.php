<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6d4a3bc5eeab3ba7d15b829c09c492dfb0352be6fe16f25576ea2efe7290563a extends Twig_Template
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
        $__internal_f14563606e9ddadf0197bb37883a5b303f158199df6f05b359b872f64f5c7463 = $this->env->getExtension("native_profiler");
        $__internal_f14563606e9ddadf0197bb37883a5b303f158199df6f05b359b872f64f5c7463->enter($__internal_f14563606e9ddadf0197bb37883a5b303f158199df6f05b359b872f64f5c7463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_f14563606e9ddadf0197bb37883a5b303f158199df6f05b359b872f64f5c7463->leave($__internal_f14563606e9ddadf0197bb37883a5b303f158199df6f05b359b872f64f5c7463_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}
