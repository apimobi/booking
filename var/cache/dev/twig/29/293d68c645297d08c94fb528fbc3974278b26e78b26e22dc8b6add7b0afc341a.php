<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_360653ca8eacdc8b587960013a7dd3d1c64774dc1e790d6a61c1e5c9a4f9e450 extends Twig_Template
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
        $__internal_ddc6cef83dad48b686d82a8ddc966f334b0200356ba893ba37f2b982545996f2 = $this->env->getExtension("native_profiler");
        $__internal_ddc6cef83dad48b686d82a8ddc966f334b0200356ba893ba37f2b982545996f2->enter($__internal_ddc6cef83dad48b686d82a8ddc966f334b0200356ba893ba37f2b982545996f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ddc6cef83dad48b686d82a8ddc966f334b0200356ba893ba37f2b982545996f2->leave($__internal_ddc6cef83dad48b686d82a8ddc966f334b0200356ba893ba37f2b982545996f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
