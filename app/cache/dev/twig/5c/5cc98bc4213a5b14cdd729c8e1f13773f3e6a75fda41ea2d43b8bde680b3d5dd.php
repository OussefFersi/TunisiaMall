<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_0ca05daf37b22c980237a39f77ac3ea239bfe0d8fa88d7270e4ace9c0156bf13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
    <div class=\"content\">
        <div id=\"middle\">

            <h3 class=\"widget-title\">Choice list :</h3>
            <ul>
                <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Register</a></li>
                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Log in</a></li>
                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">View profile</a></li>
                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Edit profile</a></li>           
                <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Change password</a></li>
                <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Forgot password</a></li>
                <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Logout</a></li>
            </ul>
        </div>
    </div>
    <div class=\"container\">
        <div id=\"middle \"class=\"container_12\" >
            <div class=\"inner\">    
                <!-- login widget -->
                <div class=\"widget-container widget_login\">
                    <h3>Registration</h3>

";
        // line 30
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 33
        echo " </div>
            </div>
        </div>
    </div>
";
    }

    // line 30
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 31
        echo "<p>";
        echo $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle");
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 31,  94 => 30,  86 => 33,  84 => 30,  70 => 19,  66 => 18,  62 => 17,  58 => 16,  54 => 15,  50 => 14,  46 => 13,  38 => 7,  35 => 6,  30 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block title %}{% endblock %}*/
/* {% block body %}*/
/* */
/*     <div class="content">*/
/*         <div id="middle">*/
/* */
/*             <h3 class="widget-title">Choice list :</h3>*/
/*             <ul>*/
/*                 <li><a href="{{ path('fos_user_registration_register') }}">Register</a></li>*/
/*                 <li><a href="{{ path ('fos_user_security_login') }}">Log in</a></li>*/
/*                 <li><a href="{{ path('fos_user_profile_show') }}">View profile</a></li>*/
/*                 <li><a href="{{ path('fos_user_profile_edit') }}">Edit profile</a></li>           */
/*                 <li><a href="{{ path('fos_user_change_password') }}">Change password</a></li>*/
/*                 <li><a href="{{ path('fos_user_resetting_request') }}">Forgot password</a></li>*/
/*                 <li><a href="{{ path('fos_user_security_logout') }}">Logout</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container">*/
/*         <div id="middle "class="container_12" >*/
/*             <div class="inner">    */
/*                 <!-- login widget -->*/
/*                 <div class="widget-container widget_login">*/
/*                     <h3>Registration</h3>*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/*  </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
