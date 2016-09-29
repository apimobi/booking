<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_ed6ea70c6bce80ef1dd4ffcb1cea19afb0b62da2ef9cede81dd31d81b3b7cdef extends Twig_Template
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
        $__internal_31c9e50664ddda3845fc88ee6d64441df067e86b7ba44764ef38c8614dce7a13 = $this->env->getExtension("native_profiler");
        $__internal_31c9e50664ddda3845fc88ee6d64441df067e86b7ba44764ef38c8614dce7a13->enter($__internal_31c9e50664ddda3845fc88ee6d64441df067e86b7ba44764ef38c8614dce7a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_31c9e50664ddda3845fc88ee6d64441df067e86b7ba44764ef38c8614dce7a13->leave($__internal_31c9e50664ddda3845fc88ee6d64441df067e86b7ba44764ef38c8614dce7a13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
    }
}
