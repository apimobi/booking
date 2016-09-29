<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_678f6bee8d221354cd4bd276a301d7a811ba5787f12a16be45b3a6fbc26abd9e extends Twig_Template
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
        $__internal_29d2aa96b88e96025311f2f0314a9567938b04e1f472f7f2978f8755670d571f = $this->env->getExtension("native_profiler");
        $__internal_29d2aa96b88e96025311f2f0314a9567938b04e1f472f7f2978f8755670d571f->enter($__internal_29d2aa96b88e96025311f2f0314a9567938b04e1f472f7f2978f8755670d571f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_29d2aa96b88e96025311f2f0314a9567938b04e1f472f7f2978f8755670d571f->leave($__internal_29d2aa96b88e96025311f2f0314a9567938b04e1f472f7f2978f8755670d571f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }
}
