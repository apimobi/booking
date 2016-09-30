<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_f8409786ee964f95b9c22cab962da6789f8e481102d0ec258b4b366973772715 extends Twig_Template
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
        $__internal_f734294430094e3b97c93db0195be4ea602c7b70bd9612fa50d848b49a50c7f0 = $this->env->getExtension("native_profiler");
        $__internal_f734294430094e3b97c93db0195be4ea602c7b70bd9612fa50d848b49a50c7f0->enter($__internal_f734294430094e3b97c93db0195be4ea602c7b70bd9612fa50d848b49a50c7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f734294430094e3b97c93db0195be4ea602c7b70bd9612fa50d848b49a50c7f0->leave($__internal_f734294430094e3b97c93db0195be4ea602c7b70bd9612fa50d848b49a50c7f0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
