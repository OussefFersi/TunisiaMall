<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_0a3d7b719fa116487b7a924e80a949c21eb5364b85e3ce4514b6dff0d997c992 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        echo "<div class=\"content\">
        <div id=\"middle\">

           
            
        </div>
    </div>
    <div class=\"container\">
        <div id=\"middle \"class=\"container_12\" >
            <div class=\"inner\">    
                <!-- login widget -->
                <div class=\"widget-container widget_login\">
                    <h3>Registration</h3>

                    ";
        // line 21
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 24
        echo "                </div>
            </div>
        </div>
    </div>
    
                    
                
";
    }

    // line 21
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 22
        echo "                        <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
                    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 22,  67 => 21,  56 => 24,  54 => 21,  38 => 7,  35 => 6,  30 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block title %}{% endblock %}*/
/* {% block body %}*/
/* <div class="content">*/
/*         <div id="middle">*/
/* */
/*            */
/*             */
/*         </div>*/
/*     </div>*/
/*     <div class="container">*/
/*         <div id="middle "class="container_12" >*/
/*             <div class="inner">    */
/*                 <!-- login widget -->*/
/*                 <div class="widget-container widget_login">*/
/*                     <h3>Registration</h3>*/
/* */
/*                     {% block fos_user_content %}*/
/*                         <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/*                     {% endblock fos_user_content %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     */
/*                     */
/*                 */
/* {% endblock %}*/
