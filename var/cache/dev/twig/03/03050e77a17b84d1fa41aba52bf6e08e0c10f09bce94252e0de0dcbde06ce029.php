<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_97af95738a0110f1b58c5162b6674ab4ff477c4517c6b9c70ea9695d12754e38 extends Twig_Template
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
        $__internal_0558286bd84c18cb4b1cd63ed3380dc2f116420bb2cbdd8e0a5845d1609e1e37 = $this->env->getExtension("native_profiler");
        $__internal_0558286bd84c18cb4b1cd63ed3380dc2f116420bb2cbdd8e0a5845d1609e1e37->enter($__internal_0558286bd84c18cb4b1cd63ed3380dc2f116420bb2cbdd8e0a5845d1609e1e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_0558286bd84c18cb4b1cd63ed3380dc2f116420bb2cbdd8e0a5845d1609e1e37->leave($__internal_0558286bd84c18cb4b1cd63ed3380dc2f116420bb2cbdd8e0a5845d1609e1e37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
    }
}
