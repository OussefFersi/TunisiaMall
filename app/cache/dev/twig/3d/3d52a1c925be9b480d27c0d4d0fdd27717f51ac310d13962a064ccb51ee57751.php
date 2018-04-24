<?php

/* TMallVendorBundle:Product:edit.html.twig */
class __TwigTemplate_c22037e8807ab289443e0dd0b568c1ec0959f340137712f424a4b7ee13cc7d96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TMallVendorBundle::layout.html.twig", "TMallVendorBundle:Product:edit.html.twig", 1);
        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TMallVendorBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_navbar($context, array $blocks = array())
    {
        // line 5
        echo "    
    
  <div class=\"navbar\">

  <div class=\"top-bar\">
  
\t<div class=\"row\">
  
\t\t<div class=\"pull-left visible-xs visible-sm padding_5 left_padding_15\">
\t\t\t<a href=\"javascript:ShowHide('nav_menu')\" class=\"expand_menu_link\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/images/menu-grid.gif"), "html", null, true);
        echo "\" alt=\"expand menu\"/> &nbsp; Menu</a>
\t\t</div>
\t\t<div class=\"clearfix\"></div>
        <div id=\"nav_menu\" class=\"navbar-collapse\">
          <ul class=\"main-top-menu nav navbar-nav\">
            
<li class=\"dropdown\"><a class=\"main-top-link\" href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("tmall_vendor_MyStores");
        echo "\">My Stores</a>

</li>






\t\t </ul>
\t\t\t\t\t
        </div>  
\t
\t</div>
\t
  </div>
</div>
  
    
    
    
    
    
    
    
    
    
    
    
    
    
";
    }

    // line 52
    public function block_container($context, array $blocks = array())
    {
        // line 53
        echo "    <h1>Product edit</h1>
    <div>
  
";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "  
<table class=\"table table-hover admin-table\">
    <tr >
        <td> ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "titre", array()), 'label');
        echo "</td>
       <td> ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "titre", array()), 'errors');
        echo "</td>
       <td> ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "titre", array()), 'widget');
        echo "</td>
    </tr>
    <tr >
      <td>  ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "category", array()), 'label');
        echo "</td>
       <td> ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "category", array()), 'errors');
        echo "</td>
       <td> ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "category", array()), 'widget');
        echo "</td>
    </tr>
     <tr>
      <td>  ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "quantity", array()), 'label');
        echo "</td>
       <td> ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "quantity", array()), 'errors');
        echo "</td>
       <td> ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "quantity", array()), 'widget');
        echo "</td>
    </tr>
    <tr>
       <td> ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prix", array()), 'label');
        echo "</td>
       <td> ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prix", array()), 'errors');
        echo "</td>
      <td>  ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prix", array()), 'widget');
        echo "</td>
    </tr>
    <tr>
      <td>  ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "photo", array()), 'label');
        echo "</td>
       <td> ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "photo", array()), 'errors');
        echo "</td>
       <td> ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "photo", array()), 'widget');
        echo "</td>
    </tr>
   <tr>
       <td></td>
       <td></td>
      <td>  ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget');
        echo "</td>
    </tr>
</table>
";
        // line 89
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "


  
    
    
        
 
        <a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("produit", array("id" => 1));
        echo "\">
            Back to the list
        </a>
    
    ";
        // line 101
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
   </div>
";
    }

    public function getTemplateName()
    {
        return "TMallVendorBundle:Product:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 101,  191 => 97,  180 => 89,  174 => 86,  166 => 81,  162 => 80,  158 => 79,  152 => 76,  148 => 75,  144 => 74,  138 => 71,  134 => 70,  130 => 69,  124 => 66,  120 => 65,  116 => 64,  110 => 61,  106 => 60,  102 => 59,  96 => 56,  91 => 53,  88 => 52,  52 => 20,  43 => 14,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends "TMallVendorBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block navbar%}*/
/*     */
/*     */
/*   <div class="navbar">*/
/* */
/*   <div class="top-bar">*/
/*   */
/* 	<div class="row">*/
/*   */
/* 		<div class="pull-left visible-xs visible-sm padding_5 left_padding_15">*/
/* 			<a href="javascript:ShowHide('nav_menu')" class="expand_menu_link"><img src="{{asset('vendor/images/menu-grid.gif')}}" alt="expand menu"/> &nbsp; Menu</a>*/
/* 		</div>*/
/* 		<div class="clearfix"></div>*/
/*         <div id="nav_menu" class="navbar-collapse">*/
/*           <ul class="main-top-menu nav navbar-nav">*/
/*             */
/* <li class="dropdown"><a class="main-top-link" href="{{path('tmall_vendor_MyStores')}}">My Stores</a>*/
/* */
/* </li>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* 		 </ul>*/
/* 					*/
/*         </div>  */
/* 	*/
/* 	</div>*/
/* 	*/
/*   </div>*/
/* </div>*/
/*   */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/* {% endblock %}*/
/* {% block container %}*/
/*     <h1>Product edit</h1>*/
/*     <div>*/
/*   */
/* {{ form_start(edit_form) }}  */
/* <table class="table table-hover admin-table">*/
/*     <tr >*/
/*         <td> {{ form_label(edit_form.titre) }}</td>*/
/*        <td> {{ form_errors(edit_form.titre) }}</td>*/
/*        <td> {{ form_widget(edit_form.titre) }}</td>*/
/*     </tr>*/
/*     <tr >*/
/*       <td>  {{ form_label(edit_form.category) }}</td>*/
/*        <td> {{ form_errors(edit_form.category) }}</td>*/
/*        <td> {{ form_widget(edit_form.category) }}</td>*/
/*     </tr>*/
/*      <tr>*/
/*       <td>  {{ form_label(edit_form.quantity) }}</td>*/
/*        <td> {{ form_errors(edit_form.quantity) }}</td>*/
/*        <td> {{ form_widget(edit_form.quantity) }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*        <td> {{ form_label(edit_form.prix) }}</td>*/
/*        <td> {{ form_errors(edit_form.prix) }}</td>*/
/*       <td>  {{ form_widget(edit_form.prix) }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>  {{ form_label(edit_form.photo) }}</td>*/
/*        <td> {{ form_errors(edit_form.photo) }}</td>*/
/*        <td> {{ form_widget(edit_form.photo) }}</td>*/
/*     </tr>*/
/*    <tr>*/
/*        <td></td>*/
/*        <td></td>*/
/*       <td>  {{ form_widget(edit_form.submit) }}</td>*/
/*     </tr>*/
/* </table>*/
/* {{ form_end(edit_form) }}*/
/* */
/* */
/*   */
/*     */
/*     */
/*         */
/*  */
/*         <a href="{{ path('produit',{'id':1}) }}">*/
/*             Back to the list*/
/*         </a>*/
/*     */
/*     {{ form(delete_form) }}*/
/*    </div>*/
/* {% endblock %}*/
/* */
