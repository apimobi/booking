<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_821a59b353de23013972bf84adc7fc1426b3babac812b2813294899da5b2a6b8 extends Twig_Template
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
        $__internal_6bf0dca98c41c0fa0969890f6587a9396e545404c46c1f3d564673a246cd65ce = $this->env->getExtension("native_profiler");
        $__internal_6bf0dca98c41c0fa0969890f6587a9396e545404c46c1f3d564673a246cd65ce->enter($__internal_6bf0dca98c41c0fa0969890f6587a9396e545404c46c1f3d564673a246cd65ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6bf0dca98c41c0fa0969890f6587a9396e545404c46c1f3d564673a246cd65ce->leave($__internal_6bf0dca98c41c0fa0969890f6587a9396e545404c46c1f3d564673a246cd65ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
