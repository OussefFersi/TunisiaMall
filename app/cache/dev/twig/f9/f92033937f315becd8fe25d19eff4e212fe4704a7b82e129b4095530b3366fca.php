<?php

/* TmallAdminBundle:Utilisateur:edit.html.twig */
class __TwigTemplate_2b4205fae1050703b337a1b4dbfcb852ec2e0a990e7628f467dd6bf3c21f9cfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TmallAdminBundle::admin_template_layout.html.twig", "TmallAdminBundle:Utilisateur:edit.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TmallAdminBundle::admin_template_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"right_col\" role=\"main\">
    <h1>Utilisateur edit</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("utilisateur");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
     </div>
";
    }

    public function getTemplateName()
    {
        return "TmallAdminBundle:Utilisateur:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  43 => 11,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "TmallAdminBundle::admin_template_layout.html.twig" %}*/
/* */
/* {% block content -%}*/
/*      <div class="right_col" role="main">*/
/*     <h1>Utilisateur edit</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('utilisateur') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/*      </div>*/
/* {% endblock %}*/
/* */
