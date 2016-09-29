<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_3a303adbc775dd3528f2eef27d596cbf9e782afad9b8df1daa16d2125270ce77 extends Twig_Template
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
        $__internal_d6b3673bd5fcde6668917f48768b139deee4f07a4723170b698f06a40a963b8a = $this->env->getExtension("native_profiler");
        $__internal_d6b3673bd5fcde6668917f48768b139deee4f07a4723170b698f06a40a963b8a->enter($__internal_d6b3673bd5fcde6668917f48768b139deee4f07a4723170b698f06a40a963b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d6b3673bd5fcde6668917f48768b139deee4f07a4723170b698f06a40a963b8a->leave($__internal_d6b3673bd5fcde6668917f48768b139deee4f07a4723170b698f06a40a963b8a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
