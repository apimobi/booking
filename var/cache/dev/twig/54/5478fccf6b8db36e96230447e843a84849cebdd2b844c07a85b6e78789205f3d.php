<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_a7da83889e70b9a96e7ca4131137e9978f39f7de51ad8f20a57babf67672b83d extends Twig_Template
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
        $__internal_1a012e2948ef96ed5eaae0c8ca45d238be0ea7c1522b154f6e836cc9a35bd3fa = $this->env->getExtension("native_profiler");
        $__internal_1a012e2948ef96ed5eaae0c8ca45d238be0ea7c1522b154f6e836cc9a35bd3fa->enter($__internal_1a012e2948ef96ed5eaae0c8ca45d238be0ea7c1522b154f6e836cc9a35bd3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1a012e2948ef96ed5eaae0c8ca45d238be0ea7c1522b154f6e836cc9a35bd3fa->leave($__internal_1a012e2948ef96ed5eaae0c8ca45d238be0ea7c1522b154f6e836cc9a35bd3fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
