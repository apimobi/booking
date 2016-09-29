<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_de7610c0f58bf279800aa3827da4f5c78aca171f89ec092e5dcbdaaf5118c568 extends Twig_Template
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
        $__internal_4a79b68f4af69aad865e40566c3564d605415b6b7c348bd2d1c67473944d0b35 = $this->env->getExtension("native_profiler");
        $__internal_4a79b68f4af69aad865e40566c3564d605415b6b7c348bd2d1c67473944d0b35->enter($__internal_4a79b68f4af69aad865e40566c3564d605415b6b7c348bd2d1c67473944d0b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_4a79b68f4af69aad865e40566c3564d605415b6b7c348bd2d1c67473944d0b35->leave($__internal_4a79b68f4af69aad865e40566c3564d605415b6b7c348bd2d1c67473944d0b35_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
