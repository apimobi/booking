<?php

/* base.html.twig */
class __TwigTemplate_08515ecb1fd9a9e5fc7b36ce29853e3f6db5077c98872f8cda6247ba8647f1d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69291b883afb93b54f05c58ec891e80362124d016cb3be606b5ac6b563cfeea2 = $this->env->getExtension("native_profiler");
        $__internal_69291b883afb93b54f05c58ec891e80362124d016cb3be606b5ac6b563cfeea2->enter($__internal_69291b883afb93b54f05c58ec891e80362124d016cb3be606b5ac6b563cfeea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo " -->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <!--Import Google Icon Font-->
        <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

        ";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "859e361_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_859e361_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/app_materialize_1.css");
            // line 17
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" media=\"screen,projection\" />
        ";
            // asset "859e361_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_859e361_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/app_main_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" media=\"screen,projection\" />
        ";
        } else {
            // asset "859e361"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_859e361") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/app.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" media=\"screen,projection\" />
        ";
        }
        unset($context["asset_url"]);
        // line 19
        echo "
        <!-- <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app_main_2.css"), "html", null, true);
        echo "\"/> -->

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    </head>
    ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "


    <footer class=\"page-footer orange\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col l6 s12\">
          <h5 class=\"white-text\">API</h5>
          <p class=\"grey-text text-lighten-4\">We are a team appreciated.</p>


        </div>
        <div class=\"col l3 s12\">
          <h5 class=\"white-text\">Settings</h5>
          <ul>
            <li><a class=\"white-text\" href=\"#!\">Link 1</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 2</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 3</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 4</a></li>
          </ul>
        </div>
        <div class=\"col l3 s12\">
          <h5 class=\"white-text\">Connect</h5>
          <ul>
            <li><a class=\"white-text\" href=\"#!\">Link 1</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 2</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 3</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"footer-copyright\">
      <div class=\"container\">
      Made by <a class=\"orange-text text-lighten-3\" href=\"#\">Materialize</a>
      </div>
    </div>
  </footer>
</html>
";
        
        $__internal_69291b883afb93b54f05c58ec891e80362124d016cb3be606b5ac6b563cfeea2->leave($__internal_69291b883afb93b54f05c58ec891e80362124d016cb3be606b5ac6b563cfeea2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a3620649eec78e73c9b70bf49191e949ab3995e2c614908fd0a72efd948f37a = $this->env->getExtension("native_profiler");
        $__internal_0a3620649eec78e73c9b70bf49191e949ab3995e2c614908fd0a72efd948f37a->enter($__internal_0a3620649eec78e73c9b70bf49191e949ab3995e2c614908fd0a72efd948f37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0a3620649eec78e73c9b70bf49191e949ab3995e2c614908fd0a72efd948f37a->leave($__internal_0a3620649eec78e73c9b70bf49191e949ab3995e2c614908fd0a72efd948f37a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_298a612d163b0e1be2b9e8c0104225d98776907021a4d46d99dae76d7847cc65 = $this->env->getExtension("native_profiler");
        $__internal_298a612d163b0e1be2b9e8c0104225d98776907021a4d46d99dae76d7847cc65->enter($__internal_298a612d163b0e1be2b9e8c0104225d98776907021a4d46d99dae76d7847cc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        ";
        
        $__internal_298a612d163b0e1be2b9e8c0104225d98776907021a4d46d99dae76d7847cc65->leave($__internal_298a612d163b0e1be2b9e8c0104225d98776907021a4d46d99dae76d7847cc65_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_186502db40f631130da734ed7d5d8574511a209524e1649e07a594ec1de2848f = $this->env->getExtension("native_profiler");
        $__internal_186502db40f631130da734ed7d5d8574511a209524e1649e07a594ec1de2848f->enter($__internal_186502db40f631130da734ed7d5d8574511a209524e1649e07a594ec1de2848f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "        <nav>
           <div class=\"nav-wrapper\">
             <a href=\"#!\" class=\"brand-logo\">Logo</a>
             <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
             <ul class=\"right hide-on-med-and-down\">
               <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("app_front_search_index");
        echo "\">User</a></li>
             </ul>
             <ul class=\"side-nav\" id=\"mobile-demo\">
               <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("app_front_search_index");
        echo "\">User</a></li>
             </ul>
           </div>
       </nav>


      <div class=\"container\" >
            ";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "      </div>



      ";
        // line 45
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2bafce5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2bafce5_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/app_jquery.min_1.js");
            // line 50
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
      ";
            // asset "2bafce5_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2bafce5_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/app_materialize.min_2.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
      ";
            // asset "2bafce5_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2bafce5_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/app_main_3.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
      ";
        } else {
            // asset "2bafce5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2bafce5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/app.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
      ";
        }
        unset($context["asset_url"]);
        // line 52
        echo "
    ";
        
        $__internal_186502db40f631130da734ed7d5d8574511a209524e1649e07a594ec1de2848f->leave($__internal_186502db40f631130da734ed7d5d8574511a209524e1649e07a594ec1de2848f_prof);

    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        $__internal_cdc3ed3035e02e09e18e6c83e7b911c1dbdbf887f20bf56a6edcf7dd0fbc5827 = $this->env->getExtension("native_profiler");
        $__internal_cdc3ed3035e02e09e18e6c83e7b911c1dbdbf887f20bf56a6edcf7dd0fbc5827->enter($__internal_cdc3ed3035e02e09e18e6c83e7b911c1dbdbf887f20bf56a6edcf7dd0fbc5827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_cdc3ed3035e02e09e18e6c83e7b911c1dbdbf887f20bf56a6edcf7dd0fbc5827->leave($__internal_cdc3ed3035e02e09e18e6c83e7b911c1dbdbf887f20bf56a6edcf7dd0fbc5827_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 40,  225 => 52,  199 => 50,  195 => 45,  189 => 41,  187 => 40,  177 => 33,  171 => 30,  164 => 25,  158 => 24,  148 => 7,  142 => 6,  130 => 5,  84 => 54,  82 => 24,  75 => 20,  72 => 19,  52 => 17,  48 => 13,  41 => 9,  38 => 8,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        <!-- {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('vendor/bootstrap/dist/css/bootstrap.min.css') }}\"/>
        {% endblock %} -->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <!--Import Google Icon Font-->
        <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

        {% stylesheets filter=\"scssphp\" output=\"css/app.css\"
              \"assets/vendor/materialize-src/sass/materialize.scss\"
              \"assets/css/main.css\"
        %}
            <link rel=\"stylesheet\" href=\"{{ asset_url }}\" media=\"screen,projection\" />
        {% endstylesheets %}

        <!-- <link rel=\"stylesheet\" href=\"{{ asset('css/app_main_2.css') }}\"/> -->

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    </head>
    {% block body %}
        <nav>
           <div class=\"nav-wrapper\">
             <a href=\"#!\" class=\"brand-logo\">Logo</a>
             <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
             <ul class=\"right hide-on-med-and-down\">
               <li><a href=\"{{ path('app_front_search_index') }}\">User</a></li>
             </ul>
             <ul class=\"side-nav\" id=\"mobile-demo\">
               <li><a href=\"{{ path('app_front_search_index') }}\">User</a></li>
             </ul>
           </div>
       </nav>


      <div class=\"container\" >
            {% block content %}{% endblock %}
      </div>



      {% javascripts filter=\"?jsqueeze\" output=\"js/app.js\"
        \"assets/vendor/jquery/dist/jquery.min.js\"
        \"assets/vendor/materialize-src/js/bin/materialize.min.js\"
        \"assets/js/main.js\"
        %}
            <script src=\"{{ asset_url }}\"></script>
      {% endjavascripts %}

    {% endblock %}



    <footer class=\"page-footer orange\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col l6 s12\">
          <h5 class=\"white-text\">API</h5>
          <p class=\"grey-text text-lighten-4\">We are a team appreciated.</p>


        </div>
        <div class=\"col l3 s12\">
          <h5 class=\"white-text\">Settings</h5>
          <ul>
            <li><a class=\"white-text\" href=\"#!\">Link 1</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 2</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 3</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 4</a></li>
          </ul>
        </div>
        <div class=\"col l3 s12\">
          <h5 class=\"white-text\">Connect</h5>
          <ul>
            <li><a class=\"white-text\" href=\"#!\">Link 1</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 2</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 3</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"footer-copyright\">
      <div class=\"container\">
      Made by <a class=\"orange-text text-lighten-3\" href=\"#\">Materialize</a>
      </div>
    </div>
  </footer>
</html>
";
    }
}
