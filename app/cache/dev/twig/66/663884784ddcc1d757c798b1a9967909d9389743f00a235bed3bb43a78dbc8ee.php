<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_3587590520e51ee9a317058d3ed465d49df0178921b0a871f375d5df4f746744 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
   
    <div class=\"container\">
        <div id=\"middle \"class=\"container_12\" >
            <div class=\"inner\">    
                <!-- login widget -->
                <div class=\"widget-container widget_login\">
                    <h3>Registration</h3>

                    ";
        // line 15
        echo "
                    ";
        // line 16
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 22
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 17
        echo "                        <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()))), "html", null, true);
        echo "</p>
                        ";
        // line 18
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 19
            echo "                            <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back"), "html", null, true);
            echo "</a></p>
                            ";
        }
        // line 21
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  66 => 19,  64 => 18,  59 => 17,  56 => 16,  48 => 22,  46 => 16,  43 => 15,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block body %}*/
/* */
/*    */
/*     <div class="container">*/
/*         <div id="middle "class="container_12" >*/
/*             <div class="inner">    */
/*                 <!-- login widget -->*/
/*                 <div class="widget-container widget_login">*/
/*                     <h3>Registration</h3>*/
/* */
/*                     {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/*                     {% block fos_user_content %}*/
/*                         <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*                         {% if targetUrl %}*/
/*                             <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*                             {% endif %}*/
/*                         {% endblock fos_user_content %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
