<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_720ff518bad9588622a22f8c8a8e634a3a3847abd9aca08f4330985acbe218ee extends Twig_Template
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
        $__internal_cbb467881cfd32fadfa8d48fbbcaaf5bfd251cc37d63d8a04b3f500f758181b1 = $this->env->getExtension("native_profiler");
        $__internal_cbb467881cfd32fadfa8d48fbbcaaf5bfd251cc37d63d8a04b3f500f758181b1->enter($__internal_cbb467881cfd32fadfa8d48fbbcaaf5bfd251cc37d63d8a04b3f500f758181b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_cbb467881cfd32fadfa8d48fbbcaaf5bfd251cc37d63d8a04b3f500f758181b1->leave($__internal_cbb467881cfd32fadfa8d48fbbcaaf5bfd251cc37d63d8a04b3f500f758181b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
