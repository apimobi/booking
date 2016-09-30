<?php

/* App:front\Search:index.html.twig */
class __TwigTemplate_b63f1699facc9113df496dc46a7fd4464514d783c4ca3ee5b52ba87cfe7e4af1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "App:front\\Search:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aaa3d0dd21f8d1513cd9739d71cf1aa7538be785ca677d3f889521d373e2601b = $this->env->getExtension("native_profiler");
        $__internal_aaa3d0dd21f8d1513cd9739d71cf1aa7538be785ca677d3f889521d373e2601b->enter($__internal_aaa3d0dd21f8d1513cd9739d71cf1aa7538be785ca677d3f889521d373e2601b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "App:front\\Search:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaa3d0dd21f8d1513cd9739d71cf1aa7538be785ca677d3f889521d373e2601b->leave($__internal_aaa3d0dd21f8d1513cd9739d71cf1aa7538be785ca677d3f889521d373e2601b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5954dcf0c760eb3191353d14fb90a6ff4d8d47366395a9ce2496e9bdca3c66f2 = $this->env->getExtension("native_profiler");
        $__internal_5954dcf0c760eb3191353d14fb90a6ff4d8d47366395a9ce2496e9bdca3c66f2->enter($__internal_5954dcf0c760eb3191353d14fb90a6ff4d8d47366395a9ce2496e9bdca3c66f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<div class=\"row\">

  <div class=\"col s12 m4 l3\"> <!-- Note that \"m4 l3\" was added -->
    <!-- Grey navigation panel

          This content will be:
      3-columns-wide on large screens,
      4-columns-wide on medium screens,
      12-columns-wide on small screens  -->


  </div>

</div>


";
        
        $__internal_5954dcf0c760eb3191353d14fb90a6ff4d8d47366395a9ce2496e9bdca3c66f2->leave($__internal_5954dcf0c760eb3191353d14fb90a6ff4d8d47366395a9ce2496e9bdca3c66f2_prof);

    }

    public function getTemplateName()
    {
        return "App:front\\Search:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block content %}

<div class=\"row\">

  <div class=\"col s12 m4 l3\"> <!-- Note that \"m4 l3\" was added -->
    <!-- Grey navigation panel

          This content will be:
      3-columns-wide on large screens,
      4-columns-wide on medium screens,
      12-columns-wide on small screens  -->


  </div>

</div>


{% endblock %}
";
    }
}
