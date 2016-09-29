<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_a22ab0a18bc8493e8ea3a07fef83e75fa5e23f089a7b4dfe5d1c7866517522f7 extends Twig_Template
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
        $__internal_1f2e65d3f6eb7ee467290aad22225ad3aaae033969ef1f616d3c37502d1440e2 = $this->env->getExtension("native_profiler");
        $__internal_1f2e65d3f6eb7ee467290aad22225ad3aaae033969ef1f616d3c37502d1440e2->enter($__internal_1f2e65d3f6eb7ee467290aad22225ad3aaae033969ef1f616d3c37502d1440e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1f2e65d3f6eb7ee467290aad22225ad3aaae033969ef1f616d3c37502d1440e2->leave($__internal_1f2e65d3f6eb7ee467290aad22225ad3aaae033969ef1f616d3c37502d1440e2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
