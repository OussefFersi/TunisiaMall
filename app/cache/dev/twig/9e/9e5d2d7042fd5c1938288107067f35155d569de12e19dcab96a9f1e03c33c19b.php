<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_3c7d2b782b5fac6bdd07a1c8a0232980b53f61cafacd159c980a2d50acd0fa77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "<title>Tunisia Mall</title>";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    
    </div>
    ";
        // line 9
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 45
        echo "



";
    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 10
        echo "        ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 13
        echo "





        <div class=\"container\">
            <div id=\"middle \"class=\"container_12\" >
                <div class=\"inner\">    
                    <!-- login widget -->
                    <div class=\"widget-container widget_login\">
                        <h3>Login</h3>
                        <form action=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" id=\"loginform\" class=\"loginform\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                            <label for=\"username\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                            <input type=\"text\" id=\"user-login\" name=\"_username\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"input\" value=\"\" size=\"20\" tabindex=\"10\" type=\"text\"/>

                            <label for=\"password\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"input\" value=\"\" size=\"20\" tabindex=\"10\" type=\"text\"/>

                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                            <label for=\"remember_me\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                            <span class=\"separator\">|</span> <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Forgot password</a>
                            <input type=\"submit\"  name=\"_submit\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" id=\"wp-submit\" class=\"btn-submit\" value=\"Login\" tabindex=\"100\" />
                        </form>
                    </div>

                </div>
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 37,  109 => 36,  105 => 35,  98 => 31,  93 => 29,  89 => 28,  84 => 26,  80 => 25,  66 => 13,  60 => 11,  57 => 10,  54 => 9,  46 => 45,  44 => 9,  39 => 6,  36 => 5,  30 => 4,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block title %}<title>Tunisia Mall</title>{% endblock %}*/
/* {% block body %}*/
/* */
/*     */
/*     </div>*/
/*     {% block fos_user_content %}*/
/*         {% if error %}*/
/*             <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*         {% endif %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/*         <div class="container">*/
/*             <div id="middle "class="container_12" >*/
/*                 <div class="inner">    */
/*                     <!-- login widget -->*/
/*                     <div class="widget-container widget_login">*/
/*                         <h3>Login</h3>*/
/*                         <form action="{{ path("fos_user_security_check") }}" method="post" id="loginform" class="loginform">*/
/*                             <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                             <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*                             <input type="text" id="user-login" name="_username" value="{{ last_username }}" required="required" class="input" value="" size="20" tabindex="10" type="text"/>*/
/* */
/*                             <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*                             <input type="password" id="password" name="_password" required="required" class="input" value="" size="20" tabindex="10" type="text"/>*/
/* */
/*                             <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                             <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*                             <span class="separator">|</span> <a href="{{ path('fos_user_resetting_request') }}">Forgot password</a>*/
/*                             <input type="submit"  name="_submit" value="{{ 'security.login.submit'|trans }}" id="wp-submit" class="btn-submit" value="Login" tabindex="100" />*/
/*                         </form>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endblock fos_user_content %}*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
/* */
