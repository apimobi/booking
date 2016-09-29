<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_4750761baf9c58bf130f9e7a0dc3fedfceef88d3d8906a58c7a999f83e18156e extends Twig_Template
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
        $__internal_56b453558d13950b512b2babcce3f0b23e4702c4dca4213784c04faa78ee717c = $this->env->getExtension("native_profiler");
        $__internal_56b453558d13950b512b2babcce3f0b23e4702c4dca4213784c04faa78ee717c->enter($__internal_56b453558d13950b512b2babcce3f0b23e4702c4dca4213784c04faa78ee717c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_56b453558d13950b512b2babcce3f0b23e4702c4dca4213784c04faa78ee717c->leave($__internal_56b453558d13950b512b2babcce3f0b23e4702c4dca4213784c04faa78ee717c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
