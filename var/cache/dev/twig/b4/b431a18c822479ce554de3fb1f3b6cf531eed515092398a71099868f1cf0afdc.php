<?php

/* TwigBundle:Exception:error403.html.twig */
class __TwigTemplate_9cde632db73a24b438d653041a22c6eae69dfb96afd8e32364b7f331a9a2eeaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TwigBundle:Exception:error403.html.twig", 1);
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
        $__internal_980891cfdf3cb80778064c00effd1f61cb17cf47fd70addcef21e75647741cf2 = $this->env->getExtension("native_profiler");
        $__internal_980891cfdf3cb80778064c00effd1f61cb17cf47fd70addcef21e75647741cf2->enter($__internal_980891cfdf3cb80778064c00effd1f61cb17cf47fd70addcef21e75647741cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error403.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_980891cfdf3cb80778064c00effd1f61cb17cf47fd70addcef21e75647741cf2->leave($__internal_980891cfdf3cb80778064c00effd1f61cb17cf47fd70addcef21e75647741cf2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a1d1fffa8fbf3d660fb7fb03ec2737b895b56e56b692091343f1ae226bd35cf = $this->env->getExtension("native_profiler");
        $__internal_3a1d1fffa8fbf3d660fb7fb03ec2737b895b56e56b692091343f1ae226bd35cf->enter($__internal_3a1d1fffa8fbf3d660fb7fb03ec2737b895b56e56b692091343f1ae226bd35cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Error</h1>

    <p>
        The requested page couldn't be located. Checkout for any URL
        misspelling or <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">return to the homepage</a>.
    </p>
";
        
        $__internal_3a1d1fffa8fbf3d660fb7fb03ec2737b895b56e56b692091343f1ae226bd35cf->leave($__internal_3a1d1fffa8fbf3d660fb7fb03ec2737b895b56e56b692091343f1ae226bd35cf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error403.html.twig";
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
    <h1>Error</h1>

    <p>
        The requested page couldn't be located. Checkout for any URL
        misspelling or <a href=\"{{ path('homepage') }}\">return to the homepage</a>.
    </p>
{% endblock %}
";
    }
}
