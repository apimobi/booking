<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_52a1e6688222039e554e9f9fa5a54669fd9a4962c685e20d70919f802f7f89b9 extends Twig_Template
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
        $__internal_6f151c1a80a533b2f27876d1a43eb43eecae772e9060230105129d11707d657f = $this->env->getExtension("native_profiler");
        $__internal_6f151c1a80a533b2f27876d1a43eb43eecae772e9060230105129d11707d657f->enter($__internal_6f151c1a80a533b2f27876d1a43eb43eecae772e9060230105129d11707d657f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_6f151c1a80a533b2f27876d1a43eb43eecae772e9060230105129d11707d657f->leave($__internal_6f151c1a80a533b2f27876d1a43eb43eecae772e9060230105129d11707d657f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }
}
