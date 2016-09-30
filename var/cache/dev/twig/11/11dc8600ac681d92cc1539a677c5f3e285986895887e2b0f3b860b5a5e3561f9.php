<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_7cd7440828381fad8f8ad96dc0019d4a6fa36247a6e59cbb7e28a94e353f1cef extends Twig_Template
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
        $__internal_4b6dd9119d26058c9f684289f927b289b9adc2dc507b88f44958df2bf01844c8 = $this->env->getExtension("native_profiler");
        $__internal_4b6dd9119d26058c9f684289f927b289b9adc2dc507b88f44958df2bf01844c8->enter($__internal_4b6dd9119d26058c9f684289f927b289b9adc2dc507b88f44958df2bf01844c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4b6dd9119d26058c9f684289f927b289b9adc2dc507b88f44958df2bf01844c8->leave($__internal_4b6dd9119d26058c9f684289f927b289b9adc2dc507b88f44958df2bf01844c8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
