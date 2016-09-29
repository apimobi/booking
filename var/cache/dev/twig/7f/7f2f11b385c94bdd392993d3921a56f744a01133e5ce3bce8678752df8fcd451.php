<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_c1f2b0a3de0355be3a24a328de105fe92f93f5a6ba3410c72558acd7725b996a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8a9a45066a378f1387d984ca65ba46b9e0a0dc0335350608a53c65b9248eb19 = $this->env->getExtension("native_profiler");
        $__internal_c8a9a45066a378f1387d984ca65ba46b9e0a0dc0335350608a53c65b9248eb19->enter($__internal_c8a9a45066a378f1387d984ca65ba46b9e0a0dc0335350608a53c65b9248eb19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_c8a9a45066a378f1387d984ca65ba46b9e0a0dc0335350608a53c65b9248eb19->leave($__internal_c8a9a45066a378f1387d984ca65ba46b9e0a0dc0335350608a53c65b9248eb19_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
