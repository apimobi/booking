<?php

/* App:front/Product:post.html.twig */
class __TwigTemplate_da8bf8ab32ac00cc946533f214637eecee5c03c114b3155ecd85a78af77b1205 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "App:front/Product:post.html.twig", 1);
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
        $__internal_09c2acafe48a40d0446895713dde5dc386b40b26171f92bceb5862e59d263fd8 = $this->env->getExtension("native_profiler");
        $__internal_09c2acafe48a40d0446895713dde5dc386b40b26171f92bceb5862e59d263fd8->enter($__internal_09c2acafe48a40d0446895713dde5dc386b40b26171f92bceb5862e59d263fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "App:front/Product:post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09c2acafe48a40d0446895713dde5dc386b40b26171f92bceb5862e59d263fd8->leave($__internal_09c2acafe48a40d0446895713dde5dc386b40b26171f92bceb5862e59d263fd8_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_99280da732cfcb592775b5a815a9b458673314654a85fe2379c0d8e6a359c9a9 = $this->env->getExtension("native_profiler");
        $__internal_99280da732cfcb592775b5a815a9b458673314654a85fe2379c0d8e6a359c9a9->enter($__internal_99280da732cfcb592775b5a815a9b458673314654a85fe2379c0d8e6a359c9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        if ((isset($context["showModal"]) ? $context["showModal"] : $this->getContext($context, "showModal"))) {
            // line 5
            echo "  <script>var showModal = true; </script>
";
        }
        // line 7
        echo "<div class=\"row\">

  <div class=\"col s12 m4 l3\"> <!-- Note that \"m4 l3\" was added -->
    <!-- Grey navigation panel

          This content will be:
      3-columns-wide on large screens,
      4-columns-wide on medium screens,
      12-columns-wide on small screens  -->

      ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

  </div>

</div>

<!-- Modal Structure -->
<div id=\"modal1\" class=\"modal\">
  <div class=\"modal-content\">
    <h4>Elément enregstré</h4>
    <p>YES!</p>
  </div>
  <div class=\"modal-footer\">
    <a href=\"#!\" class=\" modal-action modal-close waves-effect waves-green btn-flat\">OK</a>
  </div>
</div>


";
        
        $__internal_99280da732cfcb592775b5a815a9b458673314654a85fe2379c0d8e6a359c9a9->leave($__internal_99280da732cfcb592775b5a815a9b458673314654a85fe2379c0d8e6a359c9a9_prof);

    }

    public function getTemplateName()
    {
        return "App:front/Product:post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  46 => 7,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block content %}
{% if showModal %}
  <script>var showModal = true; </script>
{% endif %}
<div class=\"row\">

  <div class=\"col s12 m4 l3\"> <!-- Note that \"m4 l3\" was added -->
    <!-- Grey navigation panel

          This content will be:
      3-columns-wide on large screens,
      4-columns-wide on medium screens,
      12-columns-wide on small screens  -->

      {{ form(form) }}

  </div>

</div>

<!-- Modal Structure -->
<div id=\"modal1\" class=\"modal\">
  <div class=\"modal-content\">
    <h4>Elément enregstré</h4>
    <p>YES!</p>
  </div>
  <div class=\"modal-footer\">
    <a href=\"#!\" class=\" modal-action modal-close waves-effect waves-green btn-flat\">OK</a>
  </div>
</div>


{% endblock %}
";
    }
}
