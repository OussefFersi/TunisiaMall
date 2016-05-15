<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_8e122a25291e27ac51b6cf9ca0b58199eae742d7e44f0096ffc7aa3a58bbb562 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        echo "<title>GoVoyage | Reset</title>";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    
    
    

                    ";
        // line 9
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 12
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 10
        echo "                        ";
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 10)->display($context);
        // line 11
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  59 => 10,  56 => 9,  48 => 12,  46 => 9,  39 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block title %}<title>GoVoyage | Reset</title>{% endblock %}*/
/* {% block body %}*/
/* */
/*     */
/*     */
/*     */
/* */
/*                     {% block fos_user_content %}*/
/*                         {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/*                     {% endblock fos_user_content %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
