<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_ca708c5293536283ec7a9f8f9c2d4ca342d7abade09710498348b746b2e3436f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "

";
        // line 4
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    <div class=\"content\">
        <div id=\"middle\">

            <h3 class=\"widget-title\">Liste des choix :</h3>
            <ul>
                <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Register</a></li>
                <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Log in</a></li>
                <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">View profile</a></li>
                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Edit profile</a></li>           
                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Change password</a></li>
                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Forgot password</a></li>
                <li><a href=\"";
        // line 17
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
                    <h3>Changer votre mot de passe</h3>
                    ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    <div>
                        <input type=\"submit\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" id=\"wp-submit\" class=\"btn-submit\" value=\"Login\" tabindex=\"100\" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  95 => 38,  85 => 31,  80 => 29,  76 => 28,  62 => 17,  58 => 16,  54 => 15,  50 => 14,  46 => 13,  42 => 12,  38 => 11,  30 => 5,  24 => 4,  20 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* {% block body %}*/
/* */
/*     <div class="content">*/
/*         <div id="middle">*/
/* */
/*             <h3 class="widget-title">Liste des choix :</h3>*/
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
/* */
/*     <div class="container">*/
/*         <div id="middle "class="container_12" >*/
/*             <div class="inner">    */
/*                 <!-- login widget -->*/
/*                 <div class="widget-container widget_login">*/
/*                     <h3>Changer votre mot de passe</h3>*/
/*                     {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}*/
/*                     {{ form_widget(form) }}*/
/*                     <div>*/
/*                         <input type="submit" value="{{ 'change_password.submit'|trans }}" id="wp-submit" class="btn-submit" value="Login" tabindex="100" />*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
