<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_1e4695a97066fd049809d36903e1be74a3ee6ca0672d3ffe6f431a29be8cbd7f extends Twig_Template
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
        $__internal_40d494d298aec39392904ddfdfc09965c542bf48f3509e7cd5eff858ac3abebc = $this->env->getExtension("native_profiler");
        $__internal_40d494d298aec39392904ddfdfc09965c542bf48f3509e7cd5eff858ac3abebc->enter($__internal_40d494d298aec39392904ddfdfc09965c542bf48f3509e7cd5eff858ac3abebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_40d494d298aec39392904ddfdfc09965c542bf48f3509e7cd5eff858ac3abebc->leave($__internal_40d494d298aec39392904ddfdfc09965c542bf48f3509e7cd5eff858ac3abebc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
    }
}
