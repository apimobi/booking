<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_e090cf0108e8b27d1242cbdb64ccb85db835aa043fa18d663ba2730c46b2976f extends Twig_Template
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
        $__internal_01703006e3d9f21ff5b679152c3683af52e4c87f24bb093e30a2b63999073548 = $this->env->getExtension("native_profiler");
        $__internal_01703006e3d9f21ff5b679152c3683af52e4c87f24bb093e30a2b63999073548->enter($__internal_01703006e3d9f21ff5b679152c3683af52e4c87f24bb093e30a2b63999073548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_01703006e3d9f21ff5b679152c3683af52e4c87f24bb093e30a2b63999073548->leave($__internal_01703006e3d9f21ff5b679152c3683af52e4c87f24bb093e30a2b63999073548_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
