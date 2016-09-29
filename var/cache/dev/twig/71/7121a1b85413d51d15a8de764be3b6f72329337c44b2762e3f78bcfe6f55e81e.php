<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_6f7f1dbd16d5e438c4228d61305ed97e2bce02908826d60a04986fa4ae216c53 extends Twig_Template
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
        $__internal_1b55296fe929d0dd6918eb5aaa98fa9115a4eb4b4f16bb1426e42d35c7c11237 = $this->env->getExtension("native_profiler");
        $__internal_1b55296fe929d0dd6918eb5aaa98fa9115a4eb4b4f16bb1426e42d35c7c11237->enter($__internal_1b55296fe929d0dd6918eb5aaa98fa9115a4eb4b4f16bb1426e42d35c7c11237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_1b55296fe929d0dd6918eb5aaa98fa9115a4eb4b4f16bb1426e42d35c7c11237->leave($__internal_1b55296fe929d0dd6918eb5aaa98fa9115a4eb4b4f16bb1426e42d35c7c11237_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
