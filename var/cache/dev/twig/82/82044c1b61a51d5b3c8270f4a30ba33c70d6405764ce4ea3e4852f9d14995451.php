<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_bfee95a57ce727f2f9677082fcbcd797d28625d441e407ee674e69a90991ffde extends Twig_Template
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
        $__internal_962ea4fa1479410b50a43b779457bd270254f5ed7c68e968c280802647c77d73 = $this->env->getExtension("native_profiler");
        $__internal_962ea4fa1479410b50a43b779457bd270254f5ed7c68e968c280802647c77d73->enter($__internal_962ea4fa1479410b50a43b779457bd270254f5ed7c68e968c280802647c77d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_962ea4fa1479410b50a43b779457bd270254f5ed7c68e968c280802647c77d73->leave($__internal_962ea4fa1479410b50a43b779457bd270254f5ed7c68e968c280802647c77d73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
