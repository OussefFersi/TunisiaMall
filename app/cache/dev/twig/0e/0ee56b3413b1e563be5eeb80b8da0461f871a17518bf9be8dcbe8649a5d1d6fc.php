<?php

/* TMallClientBundle:Default:create_store.html.twig */
class __TwigTemplate_d5cadcd30e09683c08dce300894caa3559502da3b68c254b55396c19fea8ff3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TMallVendorBundle::layout.html.twig", "TMallClientBundle:Default:create_store.html.twig", 1);
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
        echo $this->env->getExtension('routing')->getPath("front");
        echo "\">Home</a>

</li>

<ul class=\"text-left dropdown-menu\">
<li ondragstart=\"javascript:dragStart()\" id=\"profile-edit\" class=\"menu-sub-link\"><a href=\"\">Edit</a></li>
<li ondragstart=\"javascript:dragStart()\" id=\"profile-password\" class=\"menu-sub-link\"><a href=\"\">Change Password</a></li>
</ul>
</li>
<li class=\"dropdown\"><a class=\"main-top-link\" href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("tmall_vendor_MyStores");
        echo "\">Stores</a>

</li>
<li class=\"dropdown\"><a class=\"main-top-link\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("t_mall_vendor_approve");
        echo "\">Orders</a>
<ul class=\"text-left dropdown-menu\">
<li ondragstart=\"javascript:dragStart()\" id=\"orders-approve\" class=\"menu-sub-link\"><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("t_mall_vendor_approve");
        echo "\">New Orders</a></li>
<li ondragstart=\"javascript:dragStart()\" id=\"orders-rejected\" class=\"menu-sub-link\"><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("t_mall_vendor_rejected");
        echo "\">Rejected Orders</a></li>
<li ondragstart=\"javascript:dragStart()\" id=\"orders-approved\" class=\"menu-sub-link\"><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("t_mall_vendor_approved");
        echo "\">Approved Orders</a></li>

</ul>
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

    // line 67
    public function block_container($context, array $blocks = array())
    {
        // line 68
        echo " <div class=\"container\">
    <link rel=\"stylesheet\" href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

<h1>Add a new Store</h1>

 
    ";
        // line 75
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <div class=\"form-group\">
    
        ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
        ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "
    
    </div>
    <div class=\"form-group\">
    
        ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cordonne", array()), 'label');
        echo "
        ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cordonne", array()), 'errors');
        echo "
        ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cordonne", array()), 'widget');
        echo "
    
    </div>
    
    <div class=\"form-group\">
    
        ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photo", array()), 'label');
        echo "
        ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photo", array()), 'errors');
        echo "
        ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photo", array()), 'widget');
        echo "
     
    </div>
";
        // line 99
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        // line 117
        echo "    



<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"> </script>
<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"> </script>




 </div>

";
    }

    public function getTemplateName()
    {
        return "TMallClientBundle:Default:create_store.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 122,  198 => 121,  192 => 117,  188 => 99,  182 => 96,  178 => 95,  174 => 94,  165 => 88,  161 => 87,  157 => 86,  149 => 81,  145 => 80,  141 => 79,  135 => 76,  131 => 75,  123 => 69,  120 => 68,  117 => 67,  83 => 36,  79 => 35,  75 => 34,  70 => 32,  64 => 29,  52 => 20,  43 => 14,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {%extends "TMallVendorBundle::layout.html.twig"%}*/
/* */
/* */
/* {% block navbar %}*/
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
/* <li class="dropdown"><a class="main-top-link" href="{{path('front')}}">Home</a>*/
/* */
/* </li>*/
/* */
/* <ul class="text-left dropdown-menu">*/
/* <li ondragstart="javascript:dragStart()" id="profile-edit" class="menu-sub-link"><a href="">Edit</a></li>*/
/* <li ondragstart="javascript:dragStart()" id="profile-password" class="menu-sub-link"><a href="">Change Password</a></li>*/
/* </ul>*/
/* </li>*/
/* <li class="dropdown"><a class="main-top-link" href="{{path('tmall_vendor_MyStores')}}">Stores</a>*/
/* */
/* </li>*/
/* <li class="dropdown"><a class="main-top-link" href="{{path('t_mall_vendor_approve')}}">Orders</a>*/
/* <ul class="text-left dropdown-menu">*/
/* <li ondragstart="javascript:dragStart()" id="orders-approve" class="menu-sub-link"><a href="{{path('t_mall_vendor_approve')}}">New Orders</a></li>*/
/* <li ondragstart="javascript:dragStart()" id="orders-rejected" class="menu-sub-link"><a href="{{path('t_mall_vendor_rejected')}}">Rejected Orders</a></li>*/
/* <li ondragstart="javascript:dragStart()" id="orders-approved" class="menu-sub-link"><a href="{{path('t_mall_vendor_approved')}}">Approved Orders</a></li>*/
/* */
/* </ul>*/
/* </li>*/
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
/*  */
/* {% block container %}*/
/*  <div class="container">*/
/*     <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* */
/* <h1>Add a new Store</h1>*/
/* */
/*  */
/*     {# ... #}*/
/* {{ form_start(form) }}*/
/*     {{ form_errors(form) }}*/
/*     <div class="form-group">*/
/*     */
/*         {{ form_label(form.nom) }}*/
/*         {{ form_errors(form.nom) }}*/
/*         {{ form_widget(form.nom) }}*/
/*     */
/*     </div>*/
/*     <div class="form-group">*/
/*     */
/*         {{ form_label(form.cordonne) }}*/
/*         {{ form_errors(form.cordonne) }}*/
/*         {{ form_widget(form.cordonne) }}*/
/*     */
/*     </div>*/
/*     */
/*     <div class="form-group">*/
/*     */
/*         {{ form_label(form.photo) }}*/
/*         {{ form_errors(form.photo) }}*/
/*         {{ form_widget(form.photo) }}*/
/*      */
/*     </div>*/
/* {{ form_end(form) }}*/
/* {#*/
/* <h1> Existant Stores </h1>*/
/* */
/* */
/* <table class="table">*/
/* */
/*     {% for boutique in boutiques %}*/
/*     */
/*     <tr> Name:{{boutique.nom}} </tr> <br/>*/
/*     <tr> Location:{{boutique.cordonne}} </tr> <br/>*/
/*     <tr><img src="{{ asset(boutique.getWebPath) }}" alt="" class="spaced img-responsive" /> </tr>  */
/* 			*/
/*     {% endfor %}*/
/* */
/* </table>*/
/*     */
/*     #}*/
/*     */
/* */
/* */
/* */
/* <script src="{{asset('js/bootstrap.min.js')}}"> </script>*/
/* <script src="{{asset('js/jquery.js')}}"> </script>*/
/* */
/* */
/* */
/* */
/*  </div>*/
/* */
/* {% endblock %}*/
