<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_76b8be669ef3d70c9baac566d2562f2d30e2944549e1784986bd951af4f65e3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6068ba7ddde7d6e5b00ad541253260add18ed0474276630348a1bc985440e9c6 = $this->env->getExtension("native_profiler");
        $__internal_6068ba7ddde7d6e5b00ad541253260add18ed0474276630348a1bc985440e9c6->enter($__internal_6068ba7ddde7d6e5b00ad541253260add18ed0474276630348a1bc985440e9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6068ba7ddde7d6e5b00ad541253260add18ed0474276630348a1bc985440e9c6->leave($__internal_6068ba7ddde7d6e5b00ad541253260add18ed0474276630348a1bc985440e9c6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b890284c5836233abb9baed9058980e9c1317c6475fc83d8e06c908ef1020391 = $this->env->getExtension("native_profiler");
        $__internal_b890284c5836233abb9baed9058980e9c1317c6475fc83d8e06c908ef1020391->enter($__internal_b890284c5836233abb9baed9058980e9c1317c6475fc83d8e06c908ef1020391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b890284c5836233abb9baed9058980e9c1317c6475fc83d8e06c908ef1020391->leave($__internal_b890284c5836233abb9baed9058980e9c1317c6475fc83d8e06c908ef1020391_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
