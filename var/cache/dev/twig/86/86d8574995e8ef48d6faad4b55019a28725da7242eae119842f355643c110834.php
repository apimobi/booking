<?php

/* App:front/Product:index.html.twig */
class __TwigTemplate_c6ae52ef77d39f0eb1eedc6999ed0fbab5344b4a5a7353f2f870d78f7e636ece extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "App:front/Product:index.html.twig", 1);
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
        $__internal_93dadb79428b91d8847a506204299addc06ae4ef6ea009ea14a6189b0bc560db = $this->env->getExtension("native_profiler");
        $__internal_93dadb79428b91d8847a506204299addc06ae4ef6ea009ea14a6189b0bc560db->enter($__internal_93dadb79428b91d8847a506204299addc06ae4ef6ea009ea14a6189b0bc560db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "App:front/Product:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93dadb79428b91d8847a506204299addc06ae4ef6ea009ea14a6189b0bc560db->leave($__internal_93dadb79428b91d8847a506204299addc06ae4ef6ea009ea14a6189b0bc560db_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_86973bf961c01ac3f8481370975b4523e7c20f18d490bab91fb603e175e2578d = $this->env->getExtension("native_profiler");
        $__internal_86973bf961c01ac3f8481370975b4523e7c20f18d490bab91fb603e175e2578d->enter($__internal_86973bf961c01ac3f8481370975b4523e7c20f18d490bab91fb603e175e2578d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<div class=\"row\">

  <div class=\"col s12 m4 l3\"> <!-- Note that \"m4 l3\" was added -->
    <!-- Grey navigation panel

          This content will be:
      3-columns-wide on large screens,
      4-columns-wide on medium screens,
      12-columns-wide on small screens  -->

      ";
        // line 15
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
        
        $__internal_86973bf961c01ac3f8481370975b4523e7c20f18d490bab91fb603e175e2578d->leave($__internal_86973bf961c01ac3f8481370975b4523e7c20f18d490bab91fb603e175e2578d_prof);

    }

    public function getTemplateName()
    {
        return "App:front/Product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
