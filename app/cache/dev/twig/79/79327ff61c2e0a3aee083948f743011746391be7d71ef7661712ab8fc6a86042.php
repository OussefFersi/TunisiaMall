<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_dee1acbe7f3e92475fdd9bc61df695e7238566c1f0a3af27f93b00c358e1365a extends Twig_Template
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
        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <div class=\"container\">
            <div id=\"middle \"class=\"container_12\" >
                <div class=\"inner\">    
                    <!-- login widget -->
                    <div class=\"widget-container widget_login\">
                        <h3>Votre profil :</h3>
    <h4>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h4></br>
    <h4>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</h4>
    </div>
    </div>
    </div>
</div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 11,  29 => 10,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <div class="container">*/
/*             <div id="middle "class="container_12" >*/
/*                 <div class="inner">    */
/*                     <!-- login widget -->*/
/*                     <div class="widget-container widget_login">*/
/*                         <h3>Votre profil :</h3>*/
/*     <h4>{{ 'profile.show.username'|trans }}: {{ user.username }}</h4></br>*/
/*     <h4>{{ 'profile.show.email'|trans }}: {{ user.email }}</h4>*/
/*     </div>*/
/*     </div>*/
/*     </div>*/
/* </div>*/
/*     </div>*/
/* */
