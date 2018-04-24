<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_7af0d33c9f55022e00359c9405f89284a5d255cd6912ad2f8b058ceff0aa00b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "

";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayBlock('body', $context, $blocks);
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"content\">
        <div id=\"middle\">

            <h3 class=\"widget-title\">Choice list :</h3>
            <ul>
                <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Register</a></li>
                <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Log in</a></li>
                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">View profile</a></li>
                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Edit profile</a></li>           
                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Change password</a></li>
                <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Forgot password</a></li>
                <li><a href=\"";
        // line 18
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
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    <div>
                        <input type=\"submit\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" id=\"wp-submit\" class=\"btn-submit\" value=\"Login\" tabindex=\"100\" />
                    </div>
                    ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  99 => 34,  94 => 32,  89 => 30,  85 => 29,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  39 => 6,  36 => 5,  31 => 4,  27 => 5,  25 => 4,  21 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
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
/*                     {{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}*/
/*                     {{ form_widget(form) }}*/
/*                     <div>*/
/*                         <input type="submit" value="{{ 'resetting.reset.submit'|trans }}" id="wp-submit" class="btn-submit" value="Login" tabindex="100" />*/
/*                     </div>*/
/*                     {{ form_end(form) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
