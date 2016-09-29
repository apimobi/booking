<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_c23a5bfddc75eac681cc4fb3e243218c685e4fd739d4fa3fdcc06f31e4aa09bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TwigBundle:Exception:error404.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fd839831768b9a31d3161a2bf546fb3dd9a04f872b9bca4be6a07fd82b9ec1a = $this->env->getExtension("native_profiler");
        $__internal_1fd839831768b9a31d3161a2bf546fb3dd9a04f872b9bca4be6a07fd82b9ec1a->enter($__internal_1fd839831768b9a31d3161a2bf546fb3dd9a04f872b9bca4be6a07fd82b9ec1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fd839831768b9a31d3161a2bf546fb3dd9a04f872b9bca4be6a07fd82b9ec1a->leave($__internal_1fd839831768b9a31d3161a2bf546fb3dd9a04f872b9bca4be6a07fd82b9ec1a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a00ca09104721e870e861aaf608b9d4701b8a4c1800f0ac3e53a9f97ebf06f24 = $this->env->getExtension("native_profiler");
        $__internal_a00ca09104721e870e861aaf608b9d4701b8a4c1800f0ac3e53a9f97ebf06f24->enter($__internal_a00ca09104721e870e861aaf608b9d4701b8a4c1800f0ac3e53a9f97ebf06f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Page not found</h1>
    
    <p>
        The requested page couldn't be located. Checkout for any URL
        misspelling or <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">return to the homepage</a>.
    </p>
";
        
        $__internal_a00ca09104721e870e861aaf608b9d4701b8a4c1800f0ac3e53a9f97ebf06f24->leave($__internal_a00ca09104721e870e861aaf608b9d4701b8a4c1800f0ac3e53a9f97ebf06f24_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body %}
    <h1>Page not found</h1>
    
    <p>
        The requested page couldn't be located. Checkout for any URL
        misspelling or <a href=\"{{ path('homepage') }}\">return to the homepage</a>.
    </p>
{% endblock %}
";
    }
}
