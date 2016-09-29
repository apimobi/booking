<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_0c41e4089d44ca5daa643f0663aef5978931547b4d2d1ce583b1bd4f36f24f69 extends Twig_Template
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
        $__internal_ef9c61c598455b86e9a40dab61432b6cfe3c5fa1ed02b92d6275412584681bcd = $this->env->getExtension("native_profiler");
        $__internal_ef9c61c598455b86e9a40dab61432b6cfe3c5fa1ed02b92d6275412584681bcd->enter($__internal_ef9c61c598455b86e9a40dab61432b6cfe3c5fa1ed02b92d6275412584681bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ef9c61c598455b86e9a40dab61432b6cfe3c5fa1ed02b92d6275412584681bcd->leave($__internal_ef9c61c598455b86e9a40dab61432b6cfe3c5fa1ed02b92d6275412584681bcd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
