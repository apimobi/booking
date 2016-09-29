<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c92042631c213ed0243be393867f0905ce195a9bddbddf08210d732c8cbeaa98 extends Twig_Template
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
        $__internal_e63ff302a726b51935aa7afe8edf546ae130ed58576e1ddcd2d3a3e4f72f246e = $this->env->getExtension("native_profiler");
        $__internal_e63ff302a726b51935aa7afe8edf546ae130ed58576e1ddcd2d3a3e4f72f246e->enter($__internal_e63ff302a726b51935aa7afe8edf546ae130ed58576e1ddcd2d3a3e4f72f246e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_e63ff302a726b51935aa7afe8edf546ae130ed58576e1ddcd2d3a3e4f72f246e->leave($__internal_e63ff302a726b51935aa7afe8edf546ae130ed58576e1ddcd2d3a3e4f72f246e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
    }
}
