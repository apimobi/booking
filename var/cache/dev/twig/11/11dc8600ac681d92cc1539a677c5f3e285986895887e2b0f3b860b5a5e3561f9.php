<?php

/* TwigBundle:Exception:exception.css.twig */
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
        $__internal_f11da807b582a3a992033611490c8141038742f59f3d788b7a152034f2a42141 = $this->env->getExtension("native_profiler");
        $__internal_f11da807b582a3a992033611490c8141038742f59f3d788b7a152034f2a42141->enter($__internal_f11da807b582a3a992033611490c8141038742f59f3d788b7a152034f2a42141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f11da807b582a3a992033611490c8141038742f59f3d788b7a152034f2a42141->leave($__internal_f11da807b582a3a992033611490c8141038742f59f3d788b7a152034f2a42141_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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