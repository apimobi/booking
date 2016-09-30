<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0b7ac698544d74d0147ab0a6ed7a1b33130faa812c0c78a625e89526d0d12976 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a92d991d015720a0e91eab99061c647402f7e2ef73511f4dd8669d17e25bea2 = $this->env->getExtension("native_profiler");
        $__internal_8a92d991d015720a0e91eab99061c647402f7e2ef73511f4dd8669d17e25bea2->enter($__internal_8a92d991d015720a0e91eab99061c647402f7e2ef73511f4dd8669d17e25bea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a92d991d015720a0e91eab99061c647402f7e2ef73511f4dd8669d17e25bea2->leave($__internal_8a92d991d015720a0e91eab99061c647402f7e2ef73511f4dd8669d17e25bea2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4c2d3aa3baa4ab41274007296a54f09ad54e1d5192175d50d2883bb29daa632e = $this->env->getExtension("native_profiler");
        $__internal_4c2d3aa3baa4ab41274007296a54f09ad54e1d5192175d50d2883bb29daa632e->enter($__internal_4c2d3aa3baa4ab41274007296a54f09ad54e1d5192175d50d2883bb29daa632e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4c2d3aa3baa4ab41274007296a54f09ad54e1d5192175d50d2883bb29daa632e->leave($__internal_4c2d3aa3baa4ab41274007296a54f09ad54e1d5192175d50d2883bb29daa632e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9b404f6b76349a5a4766a7ff938ea35c55f955c97a565399be2d7a583450851 = $this->env->getExtension("native_profiler");
        $__internal_b9b404f6b76349a5a4766a7ff938ea35c55f955c97a565399be2d7a583450851->enter($__internal_b9b404f6b76349a5a4766a7ff938ea35c55f955c97a565399be2d7a583450851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b9b404f6b76349a5a4766a7ff938ea35c55f955c97a565399be2d7a583450851->leave($__internal_b9b404f6b76349a5a4766a7ff938ea35c55f955c97a565399be2d7a583450851_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_33fb400d04d99b2b09c305e10835e70690123f1e2c7913cb5fbb99012615a62b = $this->env->getExtension("native_profiler");
        $__internal_33fb400d04d99b2b09c305e10835e70690123f1e2c7913cb5fbb99012615a62b->enter($__internal_33fb400d04d99b2b09c305e10835e70690123f1e2c7913cb5fbb99012615a62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_33fb400d04d99b2b09c305e10835e70690123f1e2c7913cb5fbb99012615a62b->leave($__internal_33fb400d04d99b2b09c305e10835e70690123f1e2c7913cb5fbb99012615a62b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
