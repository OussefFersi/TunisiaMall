<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_206cd992db4c473bf60a76947fd78244b873d092e0f94ce5ae7e673a2e6c7621 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "

";
        // line 4
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 5
        echo "
         <div>
            <ul>

                <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">View profile</a></li>

                <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Change password</a></li>

            </ul>
         </div> 
                <div class=\"dark-matter\">
                    <h3>Change Profile Information</h3>

                    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    <div>
                        <input type=\"submit\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" id=\"wp-submit\" class=\"btn btn-primary\" value=\"Login\" tabindex=\"100\"/>
                    </div>
                    ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
                ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 23,  60 => 21,  55 => 19,  51 => 18,  41 => 11,  36 => 9,  30 => 5,  24 => 4,  20 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* {% block fos_user_content %}*/
/* */
/*          <div>*/
/*             <ul>*/
/* */
/*                 <li><a href="{{ path('fos_user_profile_show') }}">View profile</a></li>*/
/* */
/*                 <li><a href="{{ path('fos_user_change_password') }}">Change password</a></li>*/
/* */
/*             </ul>*/
/*          </div> */
/*                 <div class="dark-matter">*/
/*                     <h3>Change Profile Information</h3>*/
/* */
/*                     {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}*/
/*                     {{ form_widget(form) }}*/
/*                     <div>*/
/*                         <input type="submit" value="{{ 'profile.edit.submit'|trans }}" id="wp-submit" class="btn btn-primary" value="Login" tabindex="100"/>*/
/*                     </div>*/
/*                     {{ form_end(form) }}*/
/*                 </div>*/
/*                 {% endblock %}*/
