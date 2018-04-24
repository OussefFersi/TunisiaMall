<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_cb30dc5e5718712a8511084a52374bbf40bdf3cbaebb658ff8b9dbe31dc3da25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
    <div class=\"content\">
        <div id=\"middle\">

            <h3 class=\"widget-title\">Liste des choix :</h3>
            <ul>
                
                
                <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Edit profile</a></li>           
                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Change password</a></li>
                
            </ul>
        </div>
                </div>
";
        // line 19
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 20
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 20)->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 20,  54 => 19,  46 => 14,  42 => 13,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block body %}*/
/*     */
/*     <div class="content">*/
/*         <div id="middle">*/
/* */
/*             <h3 class="widget-title">Liste des choix :</h3>*/
/*             <ul>*/
/*                 */
/*                 */
/*                 <li><a href="{{ path('fos_user_profile_edit') }}">Edit profile</a></li>           */
/*                 <li><a href="{{ path('fos_user_change_password') }}">Change password</a></li>*/
/*                 */
/*             </ul>*/
/*         </div>*/
/*                 </div>*/
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* {% endblock %}*/
