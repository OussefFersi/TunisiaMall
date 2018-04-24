<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_5bafa83ca23243494520439aaca22dedf7480c373cece4490566b7d5fe6fe41d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 4
        $this->displayBlock('body', $context, $blocks);
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "TunsiaMall mail confirmation";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    

                    ";
        // line 8
        $this->displayBlock('subject', $context, $blocks);
        // line 13
        echo "                    ";
        $this->displayBlock('body_text', $context, $blocks);
        // line 18
        echo "                ";
        $this->displayBlock('body_html', $context, $blocks);
        // line 19
        echo "       
";
    }

    // line 8
    public function block_subject($context, array $blocks = array())
    {
        // line 9
        echo "                        ";
        // line 10
        echo "                            ";
        echo $this->env->getExtension('translator')->trans("Welcome to Tunisia Mall", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
                        ";
        // line 12
        echo "                    ";
    }

    // line 13
    public function block_body_text($context, array $blocks = array())
    {
        // line 14
        echo "                        ";
        // line 15
        echo "                            ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
                        ";
        // line 17
        echo "                    ";
    }

    // line 18
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  88 => 18,  84 => 17,  79 => 15,  77 => 14,  74 => 13,  70 => 12,  65 => 10,  63 => 9,  60 => 8,  55 => 19,  52 => 18,  49 => 13,  47 => 8,  42 => 5,  39 => 4,  33 => 3,  29 => 4,  27 => 3,  24 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block title %}TunsiaMall mail confirmation{% endblock %}*/
/* {% block body %}*/
/* */
/*     */
/* */
/*                     {% block subject %}*/
/*                         {% autoescape false %}*/
/*                             {{ 'Welcome to Tunisia Mall'|trans({'%username%': user.username}) }}*/
/*                         {% endautoescape %}*/
/*                     {% endblock %}*/
/*                     {% block body_text %}*/
/*                         {% autoescape false %}*/
/*                             {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/*                         {% endautoescape %}*/
/*                     {% endblock %}*/
/*                 {% block body_html %}{% endblock %}*/
/*        */
/* {% endblock %}*/
