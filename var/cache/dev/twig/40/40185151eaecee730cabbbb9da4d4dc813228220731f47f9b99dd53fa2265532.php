<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_a49dae6eefe509c2155073b996ed58f3df8423e5bdf9f37e910ebb6b64aacd1d extends Twig_Template
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
        $__internal_5a12904d13dd1a5a7e44ac156738c555e62b86d123887491a5181cb20456ddcf = $this->env->getExtension("native_profiler");
        $__internal_5a12904d13dd1a5a7e44ac156738c555e62b86d123887491a5181cb20456ddcf->enter($__internal_5a12904d13dd1a5a7e44ac156738c555e62b86d123887491a5181cb20456ddcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5a12904d13dd1a5a7e44ac156738c555e62b86d123887491a5181cb20456ddcf->leave($__internal_5a12904d13dd1a5a7e44ac156738c555e62b86d123887491a5181cb20456ddcf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
