<?php

/* NelmioApiDocBundle::resource.html.twig */
class __TwigTemplate_16f510aa83a0a5ce96af3a312ad211a36c81af65ff16b2e13f39e40cdb0a28e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NelmioApiDocBundle::layout.html.twig", "NelmioApiDocBundle::resource.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bfd658a633a2f1bc85c65ebfe87ec5c6dd860e4ade5ce31d8e07f5f32358fd1f = $this->env->getExtension("native_profiler");
        $__internal_bfd658a633a2f1bc85c65ebfe87ec5c6dd860e4ade5ce31d8e07f5f32358fd1f->enter($__internal_bfd658a633a2f1bc85c65ebfe87ec5c6dd860e4ade5ce31d8e07f5f32358fd1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfd658a633a2f1bc85c65ebfe87ec5c6dd860e4ade5ce31d8e07f5f32358fd1f->leave($__internal_bfd658a633a2f1bc85c65ebfe87ec5c6dd860e4ade5ce31d8e07f5f32358fd1f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_334c2ad283b62fd5ae31169a313cc201ddfa1da6696bd27148b4b45ab2fc8091 = $this->env->getExtension("native_profiler");
        $__internal_334c2ad283b62fd5ae31169a313cc201ddfa1da6696bd27148b4b45ab2fc8091->enter($__internal_334c2ad283b62fd5ae31169a313cc201ddfa1da6696bd27148b4b45ab2fc8091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    ";
        // line 8
        $this->loadTemplate("NelmioApiDocBundle::method.html.twig", "NelmioApiDocBundle::resource.html.twig", 8)->display($context);
        // line 9
        echo "                </ul>
            </li>
        </ul>
    </li>
";
        
        $__internal_334c2ad283b62fd5ae31169a313cc201ddfa1da6696bd27148b4b45ab2fc8091->leave($__internal_334c2ad283b62fd5ae31169a313cc201ddfa1da6696bd27148b4b45ab2fc8091_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::resource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"NelmioApiDocBundle::layout.html.twig\" %}

{% block content %}
    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    {% include 'NelmioApiDocBundle::method.html.twig' %}
                </ul>
            </li>
        </ul>
    </li>
{% endblock content %}
";
    }
}
