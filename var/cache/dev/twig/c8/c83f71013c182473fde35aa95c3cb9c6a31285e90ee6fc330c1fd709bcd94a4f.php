<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_fe1d9fb3cd0f9ce5d69b579e969fcfbba4316cd35184816307eb840e15098913 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf7dcad29bf565c1e9d21ee091c0b7629066b46571f3c90d5a9a353f90d0e4fd = $this->env->getExtension("native_profiler");
        $__internal_bf7dcad29bf565c1e9d21ee091c0b7629066b46571f3c90d5a9a353f90d0e4fd->enter($__internal_bf7dcad29bf565c1e9d21ee091c0b7629066b46571f3c90d5a9a353f90d0e4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf7dcad29bf565c1e9d21ee091c0b7629066b46571f3c90d5a9a353f90d0e4fd->leave($__internal_bf7dcad29bf565c1e9d21ee091c0b7629066b46571f3c90d5a9a353f90d0e4fd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ac16bc3a666d2775cce891c51d85aa8e2b45d3bacaafc74fbb4aae42b7e8f3ff = $this->env->getExtension("native_profiler");
        $__internal_ac16bc3a666d2775cce891c51d85aa8e2b45d3bacaafc74fbb4aae42b7e8f3ff->enter($__internal_ac16bc3a666d2775cce891c51d85aa8e2b45d3bacaafc74fbb4aae42b7e8f3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ac16bc3a666d2775cce891c51d85aa8e2b45d3bacaafc74fbb4aae42b7e8f3ff->leave($__internal_ac16bc3a666d2775cce891c51d85aa8e2b45d3bacaafc74fbb4aae42b7e8f3ff_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_92eab2e1a8f4acbe195555bd32cc53549bd8007144ce2056756345dca156010f = $this->env->getExtension("native_profiler");
        $__internal_92eab2e1a8f4acbe195555bd32cc53549bd8007144ce2056756345dca156010f->enter($__internal_92eab2e1a8f4acbe195555bd32cc53549bd8007144ce2056756345dca156010f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_92eab2e1a8f4acbe195555bd32cc53549bd8007144ce2056756345dca156010f->leave($__internal_92eab2e1a8f4acbe195555bd32cc53549bd8007144ce2056756345dca156010f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9833f50be74267e0e825a425a66ed06173d0dd5a120aa7cb73779b9261fa217d = $this->env->getExtension("native_profiler");
        $__internal_9833f50be74267e0e825a425a66ed06173d0dd5a120aa7cb73779b9261fa217d->enter($__internal_9833f50be74267e0e825a425a66ed06173d0dd5a120aa7cb73779b9261fa217d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9833f50be74267e0e825a425a66ed06173d0dd5a120aa7cb73779b9261fa217d->leave($__internal_9833f50be74267e0e825a425a66ed06173d0dd5a120aa7cb73779b9261fa217d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
