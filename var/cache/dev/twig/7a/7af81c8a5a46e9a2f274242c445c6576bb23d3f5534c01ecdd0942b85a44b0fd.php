<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_6fd036886c4f95457c075ba32c4ca3c0a21bc2a37cc87b590ba02571fd3334d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TwigBundle:Exception:error.html.twig", 1);
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
        $__internal_33eeb74e77315d4f0732db0c45ae7c3d3f65ddcfe3fb7543e81fa5aff18f8210 = $this->env->getExtension("native_profiler");
        $__internal_33eeb74e77315d4f0732db0c45ae7c3d3f65ddcfe3fb7543e81fa5aff18f8210->enter($__internal_33eeb74e77315d4f0732db0c45ae7c3d3f65ddcfe3fb7543e81fa5aff18f8210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33eeb74e77315d4f0732db0c45ae7c3d3f65ddcfe3fb7543e81fa5aff18f8210->leave($__internal_33eeb74e77315d4f0732db0c45ae7c3d3f65ddcfe3fb7543e81fa5aff18f8210_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9ad9b562f4fc3607b38566bfcb13c19c4f764d8d61852ecf551d46f1b631187 = $this->env->getExtension("native_profiler");
        $__internal_a9ad9b562f4fc3607b38566bfcb13c19c4f764d8d61852ecf551d46f1b631187->enter($__internal_a9ad9b562f4fc3607b38566bfcb13c19c4f764d8d61852ecf551d46f1b631187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a9ad9b562f4fc3607b38566bfcb13c19c4f764d8d61852ecf551d46f1b631187->leave($__internal_a9ad9b562f4fc3607b38566bfcb13c19c4f764d8d61852ecf551d46f1b631187_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
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
