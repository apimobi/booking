<?php

/* App:front/User:post.html.twig */
class __TwigTemplate_96af97145644c686a150a7a472544601be38b0f91a9d676bed6d415472a18bee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "App:front/User:post.html.twig", 1);
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
        $__internal_b151ab0b2788bb153179a2a4fbddfe22d99e3f79472d842bd09335e7115356b7 = $this->env->getExtension("native_profiler");
        $__internal_b151ab0b2788bb153179a2a4fbddfe22d99e3f79472d842bd09335e7115356b7->enter($__internal_b151ab0b2788bb153179a2a4fbddfe22d99e3f79472d842bd09335e7115356b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "App:front/User:post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b151ab0b2788bb153179a2a4fbddfe22d99e3f79472d842bd09335e7115356b7->leave($__internal_b151ab0b2788bb153179a2a4fbddfe22d99e3f79472d842bd09335e7115356b7_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_46b1234da6ea4913b34667246cb567ca47f1a309a0739c9499c1199dc6a8cc3c = $this->env->getExtension("native_profiler");
        $__internal_46b1234da6ea4913b34667246cb567ca47f1a309a0739c9499c1199dc6a8cc3c->enter($__internal_46b1234da6ea4913b34667246cb567ca47f1a309a0739c9499c1199dc6a8cc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<div class=\"row\">

  <div class=\"col s12 m4 l3\"> <!-- Note that \"m4 l3\" was added -->
    <!-- Grey navigation panel

          This content will be:
      3-columns-wide on large screens,
      4-columns-wide on medium screens,
      12-columns-wide on small screens  -->

      ";
        // line 13
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
        
        $__internal_46b1234da6ea4913b34667246cb567ca47f1a309a0739c9499c1199dc6a8cc3c->leave($__internal_46b1234da6ea4913b34667246cb567ca47f1a309a0739c9499c1199dc6a8cc3c_prof);

    }

    public function getTemplateName()
    {
        return "App:front/User:post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  40 => 3,  34 => 2,  11 => 1,);
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
