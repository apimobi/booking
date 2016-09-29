<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_fd3021a602f4c999625ff7b7e2f7e8fe9eb3a505a3e1c8871dc850ffa370fe14 extends Twig_Template
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
        $__internal_2815033ef911b71f02b9ad0297cf0ad85f7e9515e6e2ea1374693ee677b2d1e0 = $this->env->getExtension("native_profiler");
        $__internal_2815033ef911b71f02b9ad0297cf0ad85f7e9515e6e2ea1374693ee677b2d1e0->enter($__internal_2815033ef911b71f02b9ad0297cf0ad85f7e9515e6e2ea1374693ee677b2d1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_2815033ef911b71f02b9ad0297cf0ad85f7e9515e6e2ea1374693ee677b2d1e0->leave($__internal_2815033ef911b71f02b9ad0297cf0ad85f7e9515e6e2ea1374693ee677b2d1e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}
