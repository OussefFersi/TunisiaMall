<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_e4a32ad86526961c0fd2725836faefd93c6a4f783af9a1ba6eaf935aac1e2409 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"content\">
        <div id=\"middle\">

            <h3 class=\"widget-title\">Choice list :</h3>
            <ul>
                <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Register</a></li>
                <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Log in</a></li>
                <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">View profile</a></li>
                <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Edit profile</a></li>           
                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Change password</a></li>
                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Forgot password</a></li>
                <li><a href=\"";
        // line 16
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
        // line 26
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 29
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 26
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 27
        echo "                        ";
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 27)->display($context);
        // line 28
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 28,  96 => 27,  93 => 26,  85 => 29,  83 => 26,  70 => 16,  66 => 15,  62 => 14,  58 => 13,  54 => 12,  50 => 11,  46 => 10,  38 => 4,  35 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
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
/*                     {% block fos_user_content %}*/
/*                         {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/*                     {% endblock fos_user_content %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
