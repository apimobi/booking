<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_2d84d233ce5612c425f655e1a2856052b0e5fd05969d3319935b8e1985b5465e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_5a15233d43709a7977bcc4a19d603f3de6ca702d62ad2af4fb52f2fdb3d42aac = $this->env->getExtension("native_profiler");
        $__internal_5a15233d43709a7977bcc4a19d603f3de6ca702d62ad2af4fb52f2fdb3d42aac->enter($__internal_5a15233d43709a7977bcc4a19d603f3de6ca702d62ad2af4fb52f2fdb3d42aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a15233d43709a7977bcc4a19d603f3de6ca702d62ad2af4fb52f2fdb3d42aac->leave($__internal_5a15233d43709a7977bcc4a19d603f3de6ca702d62ad2af4fb52f2fdb3d42aac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d81ae794e16fd90abb66e1226065c729085dea11848fed150eba880f0a497641 = $this->env->getExtension("native_profiler");
        $__internal_d81ae794e16fd90abb66e1226065c729085dea11848fed150eba880f0a497641->enter($__internal_d81ae794e16fd90abb66e1226065c729085dea11848fed150eba880f0a497641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d81ae794e16fd90abb66e1226065c729085dea11848fed150eba880f0a497641->leave($__internal_d81ae794e16fd90abb66e1226065c729085dea11848fed150eba880f0a497641_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd2702bde398ddec85938bb972ec5820af7c5408c0d9a3d365a6de7ed56d0fc3 = $this->env->getExtension("native_profiler");
        $__internal_dd2702bde398ddec85938bb972ec5820af7c5408c0d9a3d365a6de7ed56d0fc3->enter($__internal_dd2702bde398ddec85938bb972ec5820af7c5408c0d9a3d365a6de7ed56d0fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_dd2702bde398ddec85938bb972ec5820af7c5408c0d9a3d365a6de7ed56d0fc3->leave($__internal_dd2702bde398ddec85938bb972ec5820af7c5408c0d9a3d365a6de7ed56d0fc3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
