<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_8969e46f074b04f2028d1178f26ba8148b4d6477f3f7b78fe3e3c8f7a6a57b7c extends Twig_Template
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
        $__internal_d46b2062add3c12693a87c90a2263afa4fa311837352362be03242fc3cdb6d23 = $this->env->getExtension("native_profiler");
        $__internal_d46b2062add3c12693a87c90a2263afa4fa311837352362be03242fc3cdb6d23->enter($__internal_d46b2062add3c12693a87c90a2263afa4fa311837352362be03242fc3cdb6d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d46b2062add3c12693a87c90a2263afa4fa311837352362be03242fc3cdb6d23->leave($__internal_d46b2062add3c12693a87c90a2263afa4fa311837352362be03242fc3cdb6d23_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
