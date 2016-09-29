<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_a3b88a18149ca71e8fa0cac32341d62c1d78e78f759797bd487085862a673bb4 extends Twig_Template
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
        $__internal_aa7be2b1f0250c84fb0ac8efc97b220eca0336cf238bffff3c1058d3f8aa1372 = $this->env->getExtension("native_profiler");
        $__internal_aa7be2b1f0250c84fb0ac8efc97b220eca0336cf238bffff3c1058d3f8aa1372->enter($__internal_aa7be2b1f0250c84fb0ac8efc97b220eca0336cf238bffff3c1058d3f8aa1372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_aa7be2b1f0250c84fb0ac8efc97b220eca0336cf238bffff3c1058d3f8aa1372->leave($__internal_aa7be2b1f0250c84fb0ac8efc97b220eca0336cf238bffff3c1058d3f8aa1372_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}
