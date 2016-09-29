<?php

/* App:api:motd.html.twig */
class __TwigTemplate_202080729c566fcea7f0c73f6b0c034be2fee4f360cd7c66b73115cb6ec6bb43 extends Twig_Template
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
        $__internal_6fabdfd5b25aaf0d585d23b5d22238885774e4283173a2447f832c511a5c8ad3 = $this->env->getExtension("native_profiler");
        $__internal_6fabdfd5b25aaf0d585d23b5d22238885774e4283173a2447f832c511a5c8ad3->enter($__internal_6fabdfd5b25aaf0d585d23b5d22238885774e4283173a2447f832c511a5c8ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "App:api:motd.html.twig"));

        // line 1
        echo "<div class=\"motd\">
    <h1>Welcome to API Documentation!</h1>

    <p>
        You should find here all the documentation you need to use our API, but
    </p>

    <h2>Lest's get started!</h2>
    <p>
        If you are developping an application using our API you will need to provide for each call in the headers. The name of the custom header must be 'apiKey' (ex: apiKey=cf4731597a79b5c5b2ea1474ff38f8f6ba8cae2a).
    </p>

    <h3>The API itself</h3>
    <p>
        The documentation is pretty simple and obvious: all the available routes are listed bellow with their documentation.<br />
        You can either ask for a <strong>JSON</strong> or <strong>XML</strong> response by specifying <strong><em>_format=</em></strong> in the url.<br />
    </p>

    <h3>Login & User account</h3>
    <p>
        To access some informations (like user account) you will first need to log in with a valid user. To do so use the route /api/v1/login and provide the e-mail and the password of the user.<br />
        If the user is successfully autenticated it should return you a <strong>token</strong> that will need to be used in the header to call account routes.
    </p>

    <h3>Cart</h3>
    <p>
        You create a cart with the url /api/v1/cart/create then you get a <strong>sessionId</strong>. you need to provide the sessionId in the headers for all the section Cart.
    </p>

    <h3>Delivery</h3>
    <p>
        You need to provide a sessionId from the cart and a user token to work with this section.
    </p>

</div>
";
        
        $__internal_6fabdfd5b25aaf0d585d23b5d22238885774e4283173a2447f832c511a5c8ad3->leave($__internal_6fabdfd5b25aaf0d585d23b5d22238885774e4283173a2447f832c511a5c8ad3_prof);

    }

    public function getTemplateName()
    {
        return "App:api:motd.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"motd\">
    <h1>Welcome to API Documentation!</h1>

    <p>
        You should find here all the documentation you need to use our API, but
    </p>

    <h2>Lest's get started!</h2>
    <p>
        If you are developping an application using our API you will need to provide for each call in the headers. The name of the custom header must be 'apiKey' (ex: apiKey=cf4731597a79b5c5b2ea1474ff38f8f6ba8cae2a).
    </p>

    <h3>The API itself</h3>
    <p>
        The documentation is pretty simple and obvious: all the available routes are listed bellow with their documentation.<br />
        You can either ask for a <strong>JSON</strong> or <strong>XML</strong> response by specifying <strong><em>_format=</em></strong> in the url.<br />
    </p>

    <h3>Login & User account</h3>
    <p>
        To access some informations (like user account) you will first need to log in with a valid user. To do so use the route /api/v1/login and provide the e-mail and the password of the user.<br />
        If the user is successfully autenticated it should return you a <strong>token</strong> that will need to be used in the header to call account routes.
    </p>

    <h3>Cart</h3>
    <p>
        You create a cart with the url /api/v1/cart/create then you get a <strong>sessionId</strong>. you need to provide the sessionId in the headers for all the section Cart.
    </p>

    <h3>Delivery</h3>
    <p>
        You need to provide a sessionId from the cart and a user token to work with this section.
    </p>

</div>
";
    }
}