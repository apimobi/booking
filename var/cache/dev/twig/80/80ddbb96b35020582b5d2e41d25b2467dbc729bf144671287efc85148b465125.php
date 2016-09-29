<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_6fe2cc6eb9c51de1e41183fb198a039dcde256390e898f1b5bbc5434bf8c4b79 extends Twig_Template
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
        $__internal_ced98913174e44787279317ca5c7fba90a8e72b6e5d25f1bc45fb57eebe8ed3c = $this->env->getExtension("native_profiler");
        $__internal_ced98913174e44787279317ca5c7fba90a8e72b6e5d25f1bc45fb57eebe8ed3c->enter($__internal_ced98913174e44787279317ca5c7fba90a8e72b6e5d25f1bc45fb57eebe8ed3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ced98913174e44787279317ca5c7fba90a8e72b6e5d25f1bc45fb57eebe8ed3c->leave($__internal_ced98913174e44787279317ca5c7fba90a8e72b6e5d25f1bc45fb57eebe8ed3c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
