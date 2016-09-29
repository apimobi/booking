<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_a49dae6eefe509c2155073b996ed58f3df8423e5bdf9f37e910ebb6b64aacd1d extends Twig_Template
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
        $__internal_4209a5b447abe7583e4a469211c55c1c88d6b2f027cf8ca98010ba682056b618 = $this->env->getExtension("native_profiler");
        $__internal_4209a5b447abe7583e4a469211c55c1c88d6b2f027cf8ca98010ba682056b618->enter($__internal_4209a5b447abe7583e4a469211c55c1c88d6b2f027cf8ca98010ba682056b618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_4209a5b447abe7583e4a469211c55c1c88d6b2f027cf8ca98010ba682056b618->leave($__internal_4209a5b447abe7583e4a469211c55c1c88d6b2f027cf8ca98010ba682056b618_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
