<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_402fc0f770d90b06ced3e8dbd0a748c81a9ad3bfc503be333ab2f3831f671296 extends Twig_Template
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
        $__internal_8ec3b88184ac42cb78f45b47741b8c692e64d8eb94531c57a0241c26522a7af3 = $this->env->getExtension("native_profiler");
        $__internal_8ec3b88184ac42cb78f45b47741b8c692e64d8eb94531c57a0241c26522a7af3->enter($__internal_8ec3b88184ac42cb78f45b47741b8c692e64d8eb94531c57a0241c26522a7af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8ec3b88184ac42cb78f45b47741b8c692e64d8eb94531c57a0241c26522a7af3->leave($__internal_8ec3b88184ac42cb78f45b47741b8c692e64d8eb94531c57a0241c26522a7af3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }
}
