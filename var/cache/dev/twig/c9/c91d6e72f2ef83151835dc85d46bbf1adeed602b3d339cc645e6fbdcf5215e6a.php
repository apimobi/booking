<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_0b7ac698544d74d0147ab0a6ed7a1b33130faa812c0c78a625e89526d0d12976 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_1227f14974249102a0cbe520feb3005b17072c891b437c631cab51d4ac83999c = $this->env->getExtension("native_profiler");
        $__internal_1227f14974249102a0cbe520feb3005b17072c891b437c631cab51d4ac83999c->enter($__internal_1227f14974249102a0cbe520feb3005b17072c891b437c631cab51d4ac83999c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1227f14974249102a0cbe520feb3005b17072c891b437c631cab51d4ac83999c->leave($__internal_1227f14974249102a0cbe520feb3005b17072c891b437c631cab51d4ac83999c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fe56939c3c3d90d8a8796ad3b5fb80a116f35a3daa7d31f7dd60d962c1da98ad = $this->env->getExtension("native_profiler");
        $__internal_fe56939c3c3d90d8a8796ad3b5fb80a116f35a3daa7d31f7dd60d962c1da98ad->enter($__internal_fe56939c3c3d90d8a8796ad3b5fb80a116f35a3daa7d31f7dd60d962c1da98ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fe56939c3c3d90d8a8796ad3b5fb80a116f35a3daa7d31f7dd60d962c1da98ad->leave($__internal_fe56939c3c3d90d8a8796ad3b5fb80a116f35a3daa7d31f7dd60d962c1da98ad_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_37dae89bb6ff60561710557ecf49e71d9bf444657eac03992e48a0dc005e7d53 = $this->env->getExtension("native_profiler");
        $__internal_37dae89bb6ff60561710557ecf49e71d9bf444657eac03992e48a0dc005e7d53->enter($__internal_37dae89bb6ff60561710557ecf49e71d9bf444657eac03992e48a0dc005e7d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_37dae89bb6ff60561710557ecf49e71d9bf444657eac03992e48a0dc005e7d53->leave($__internal_37dae89bb6ff60561710557ecf49e71d9bf444657eac03992e48a0dc005e7d53_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_69c8823156b5eb5409e47c48aeb50a609ee56961b34920aad3ff29db19deec7e = $this->env->getExtension("native_profiler");
        $__internal_69c8823156b5eb5409e47c48aeb50a609ee56961b34920aad3ff29db19deec7e->enter($__internal_69c8823156b5eb5409e47c48aeb50a609ee56961b34920aad3ff29db19deec7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_69c8823156b5eb5409e47c48aeb50a609ee56961b34920aad3ff29db19deec7e->leave($__internal_69c8823156b5eb5409e47c48aeb50a609ee56961b34920aad3ff29db19deec7e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
