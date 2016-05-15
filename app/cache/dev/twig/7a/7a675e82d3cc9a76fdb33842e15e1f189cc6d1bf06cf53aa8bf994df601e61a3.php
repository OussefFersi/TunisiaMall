<?php

/* TMallVendorBundle:Default:mystores.html.twig */
class __TwigTemplate_f8194807f7670b0224db90074cdf99b952692b76ffca4dbba44d54170fb54184 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TMallVendorBundle::layout.html.twig", "TMallVendorBundle:Default:mystores.html.twig", 1);
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

    // line 3
    public function block_navbar($context, array $blocks = array())
    {
        // line 4
        echo "    
    
  <div class=\"navbar\">

  <div class=\"top-bar\">
  
\t<div class=\"row\">
  
\t\t<div class=\"pull-left visible-xs visible-sm padding_5 left_padding_15\">
\t\t\t<a href=\"javascript:ShowHide('nav_menu')\" class=\"expand_menu_link\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/images/menu-grid.gif"), "html", null, true);
        echo "\" alt=\"expand menu\"/> &nbsp; Menu</a>
\t\t</div>
\t\t<div class=\"clearfix\"></div>
        <div id=\"nav_menu\" class=\"navbar-collapse\">
          <ul class=\"main-top-menu nav navbar-nav\">
            
<li class=\"dropdown\"><a class=\"main-top-link\" href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("front");
        echo "\">Home</a>

</li>
<li class=\"dropdown\"><a class=\"main-top-link\" href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("t_mall_client_listBoutique");
        echo "\">Create Store</a>

</li>

<li class=\"dropdown\"><a class=\"main-top-link\" href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("t_mall_vendor_approve");
        echo "\">Orders</a>
<ul class=\"text-left dropdown-menu\">
<li ondragstart=\"javascript:dragStart()\" id=\"orders-approve\" class=\"menu-sub-link\"><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("t_mall_vendor_approve");
        echo "\">New Orders</a></li>
<li ondragstart=\"javascript:dragStart()\" id=\"orders-rejected\" class=\"menu-sub-link\"><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("t_mall_vendor_rejected");
        echo "\">Rejected Orders</a></li>
<li ondragstart=\"javascript:dragStart()\" id=\"orders-approved\" class=\"menu-sub-link\"><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("t_mall_vendor_approved");
        echo "\">Approved Orders</a></li>
<li ondragstart=\"javascript:dragStart()\" id=\"orders-customers\" class=\"menu-sub-link\"><a href=\"\">Customers</a></li>
<li ondragstart=\"javascript:dragStart()\" id=\"orders-coupons\" class=\"menu-sub-link\"><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("t_mall_vendor_addCoupons");
        echo "\">Coupons</a></li>
<li ondragstart=\"javascript:dragStart()\" id=\"orders-points\" class=\"menu-sub-link\"><a href=\"\">Customer Loyalty Program</a></li>
</ul>
</li>


<li class=\"dropdown\"><a class=\"main-top-link\" href=\"\">Statistics</a>
<ul class=\"text-left dropdown-menu\">
<li ondragstart=\"javascript:dragStart()\" id=\"statistics-reports\" class=\"menu-sub-link\"><a href=\"\">Reports</a></li>
<li ondragstart=\"javascript:dragStart()\" id=\"statistics-orders\" class=\"menu-sub-link\"><a href=\"\">Orders</a></li>

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

    // line 68
    public function block_container($context, array $blocks = array())
    {
        // line 69
        echo "
    
<div class=\"container\">    
    
    
   
   <div class=\"text-left no-left-padding col-md-9 min-height-300\">  
       
       
\t\t<h3>List De Mes Boutique</h3>
<hr class=\"hr-margin\"/>

<div class=\"separator clear\"></div>
    ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["boutique"]) {
            // line 83
            echo " 
    <div class=\"col-md-4 no-left-right\">
<div class=\"product featured-product\">
\t\t\t\t <a href=\"\">
\t\t\t<div class=\"image-wrap\">
\t<div class=\"product-image\">
\t\t\t\t\t
\t\t\t\t\t  <img src=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["boutique"], "getWebPath", array())), "html", null, true);
            echo "\" class=\"thumb-image \" width=\"150\" alt=\"\" />
\t\t\t\t
\t\t\t\t </div> </div>
\t\t\t
\t\t\t\t<div class=\"product-description\">
\t\t\t\t<div class=\"product-name\"><a>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["boutique"], "nom", array()), "html", null, true);
            echo "</a></div>
                                <h4>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["boutique"], "cordonne", array()), "html", null, true);
            echo "</h4>
\t
\t\t\t\t\t<hr class=\"top-bottom-10\"/>
\t\t\t\t\t
\t\t\t\t<br/><br/>
 


<a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit", array("id" => $this->getAttribute($context["boutique"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">View Product</a>
<a href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit_new", array("id" => $this->getAttribute($context["boutique"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Add Product</a>
\t\t\t\t</div>\t

\t\t</div>\t</div>
   
    

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boutique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "    
  \t</div> 
      
    
    
      <div class=\"navigation\" style=\"padding-right: 20\">
    ";
        // line 119
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
</div>
</div>  
    
    ";
    }

    public function getTemplateName()
    {
        return "TMallVendorBundle:Default:mystores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 119,  195 => 113,  181 => 105,  177 => 104,  166 => 96,  162 => 95,  154 => 90,  145 => 83,  141 => 82,  126 => 69,  123 => 68,  83 => 32,  78 => 30,  74 => 29,  70 => 28,  65 => 26,  58 => 22,  52 => 19,  43 => 13,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {%extends "TMallVendorBundle::layout.html.twig"%}*/
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
/* <li class="dropdown"><a class="main-top-link" href="{{path('t_mall_client_listBoutique')}}">Create Store</a>*/
/* */
/* </li>*/
/* */
/* <li class="dropdown"><a class="main-top-link" href="{{path('t_mall_vendor_approve')}}">Orders</a>*/
/* <ul class="text-left dropdown-menu">*/
/* <li ondragstart="javascript:dragStart()" id="orders-approve" class="menu-sub-link"><a href="{{path('t_mall_vendor_approve')}}">New Orders</a></li>*/
/* <li ondragstart="javascript:dragStart()" id="orders-rejected" class="menu-sub-link"><a href="{{path('t_mall_vendor_rejected')}}">Rejected Orders</a></li>*/
/* <li ondragstart="javascript:dragStart()" id="orders-approved" class="menu-sub-link"><a href="{{path('t_mall_vendor_approved')}}">Approved Orders</a></li>*/
/* <li ondragstart="javascript:dragStart()" id="orders-customers" class="menu-sub-link"><a href="">Customers</a></li>*/
/* <li ondragstart="javascript:dragStart()" id="orders-coupons" class="menu-sub-link"><a href="{{path('t_mall_vendor_addCoupons')}}">Coupons</a></li>*/
/* <li ondragstart="javascript:dragStart()" id="orders-points" class="menu-sub-link"><a href="">Customer Loyalty Program</a></li>*/
/* </ul>*/
/* </li>*/
/* */
/* */
/* <li class="dropdown"><a class="main-top-link" href="">Statistics</a>*/
/* <ul class="text-left dropdown-menu">*/
/* <li ondragstart="javascript:dragStart()" id="statistics-reports" class="menu-sub-link"><a href="">Reports</a></li>*/
/* <li ondragstart="javascript:dragStart()" id="statistics-orders" class="menu-sub-link"><a href="">Orders</a></li>*/
/* */
/* </ul>*/
/* </li>*/
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
/* */
/*     */
/* <div class="container">    */
/*     */
/*     */
/*    */
/*    <div class="text-left no-left-padding col-md-9 min-height-300">  */
/*        */
/*        */
/* 		<h3>List De Mes Boutique</h3>*/
/* <hr class="hr-margin"/>*/
/* */
/* <div class="separator clear"></div>*/
/*     {% for boutique in pagination %}*/
/*  */
/*     <div class="col-md-4 no-left-right">*/
/* <div class="product featured-product">*/
/* 				 <a href="">*/
/* 			<div class="image-wrap">*/
/* 	<div class="product-image">*/
/* 					*/
/* 					  <img src="{{ asset(boutique.getWebPath) }}" class="thumb-image " width="150" alt="" />*/
/* 				*/
/* 				 </div> </div>*/
/* 			*/
/* 				<div class="product-description">*/
/* 				<div class="product-name"><a>{{boutique.nom}}</a></div>*/
/*                                 <h4>{{boutique.cordonne}}</h4>*/
/* 	*/
/* 					<hr class="top-bottom-10"/>*/
/* 					*/
/* 				<br/><br/>*/
/*  */
/* */
/* */
/* <a href="{{path('produit',{'id':boutique.id})}}" class="btn btn-primary">View Product</a>*/
/* <a href="{{path('produit_new',{'id':boutique.id})}}" class="btn btn-primary">Add Product</a>*/
/* 				</div>	*/
/* */
/* 		</div>	</div>*/
/*    */
/*     */
/* */
/*     {% endfor %}*/
/*     */
/*   	</div> */
/*       */
/*     */
/*     */
/*       <div class="navigation" style="padding-right: 20">*/
/*     {{ knp_pagination_render(pagination) }}*/
/* </div>*/
/* </div>  */
/*     */
/*     {% endblock %}*/
