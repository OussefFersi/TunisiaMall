<?php

/* TMallVendorBundle:Default:listCoupon.html.twig */
class __TwigTemplate_df9cd5361923b5ea75ece3c9176a231fb21d8b6941f4a6ad6b5158fd576430ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TMallVendorBundle::layout.html.twig", "TMallVendorBundle:Default:listCoupon.html.twig", 1);
        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo $this->env->getExtension('routing')->getPath("t_mall_vendor_homepage");
        echo "\">Home</a>

</li>
<li class=\"dropdown\"><a class=\"main-top-link\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("t_mall_client_listBoutique");
        echo "\">Create Store</a>

</li>
<li class=\"dropdown\"><a class=\"main-top-link\" href=\"\">Stores</a>

</li>
<li class=\"dropdown\"><a class=\"main-top-link\" href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("t_mall_vendor_approve");
        echo "\">Orders</a>
<ul class=\"text-left dropdown-menu\">
<li ondragstart=\"javascript:dragStart()\" id=\"orders-approve\" class=\"menu-sub-link\"><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("t_mall_vendor_approve");
        echo "\">New Orders</a></li>
<li ondragstart=\"javascript:dragStart()\" id=\"orders-rejected\" class=\"menu-sub-link\"><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("t_mall_vendor_rejected");
        echo "\">Rejected Orders</a></li>
<li ondragstart=\"javascript:dragStart()\" id=\"orders-approved\" class=\"menu-sub-link\"><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("t_mall_vendor_approved");
        echo "\">Approved Orders</a></li>
<li ondragstart=\"javascript:dragStart()\" id=\"orders-customers\" class=\"menu-sub-link\"><a href=\"\">Customers</a></li>
<li ondragstart=\"javascript:dragStart()\" id=\"orders-coupons\" class=\"menu-sub-link\"><a href=\"";
        // line 35
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

    // line 71
    public function block_container($context, array $blocks = array())
    {
        // line 72
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

\t<h3>Your current coupons</h3>

\t
\t
                <table class=\"table\" style=\"width :100%\">
    
        <th>Category</th>
        <th>Code</th>
        <th> Discount % </th>
        <th>Description</th>
        
        
        ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
            // line 88
            echo " 
    
    <tr data-id=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "id", array()), "html", null, true);
            echo "\">
    <td> ";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["coupon"], "idCategorie", array()), "getNom", array(), "method"), "html", null, true);
            echo " </td> <br/>
    <td> ";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "code", array()), "html", null, true);
            echo " </td> <br/>
    <td>   ";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "discount", array()), "html", null, true);
            echo "   </td><br/>
    <td>   ";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "description", array()), "html", null, true);
            echo "   </td><br/>
    
        <td> <a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tmall_vendor_rejectCoupon", array("id" => $this->getAttribute($context["coupon"], "id", array()))), "html", null, true);
            echo "\" name=\"Rejected\" class=\"btn btn-danger\">Delete</a></td> <br/>

    
    
    </tr>
    

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "    
  
    </table>  

    
    
    
    
    
    
       
    ";
        // line 116
        echo "<div class=\"navigation\">
    ";
        // line 117
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
</div>


";
    }

    // line 123
    public function block_javascripts($context, array $blocks = array())
    {
        // line 124
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/js/data-coupon.js"), "html", null, true);
        echo "\"> </script>
    
";
    }

    public function getTemplateName()
    {
        return "TMallVendorBundle:Default:listCoupon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 126,  220 => 124,  217 => 123,  208 => 117,  205 => 116,  192 => 104,  178 => 96,  173 => 94,  169 => 93,  165 => 92,  161 => 91,  157 => 90,  153 => 88,  149 => 87,  132 => 73,  129 => 72,  126 => 71,  86 => 35,  81 => 33,  77 => 32,  73 => 31,  68 => 29,  59 => 23,  53 => 20,  44 => 14,  33 => 5,  30 => 4,  11 => 1,);
    }
}
/*    {%extends "TMallVendorBundle::layout.html.twig"%}*/
/*    */
/*    */
/*    {% block navbar %}*/
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
/* <li class="dropdown"><a class="main-top-link" href="{{path('t_mall_vendor_homepage')}}">Home</a>*/
/* */
/* </li>*/
/* <li class="dropdown"><a class="main-top-link" href="{{path('t_mall_client_listBoutique')}}">Create Store</a>*/
/* */
/* </li>*/
/* <li class="dropdown"><a class="main-top-link" href="">Stores</a>*/
/* */
/* </li>*/
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
/*     <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* */
/* 	<h3>Your current coupons</h3>*/
/* */
/* 	*/
/* 	*/
/*                 <table class="table" style="width :100%">*/
/*     */
/*         <th>Category</th>*/
/*         <th>Code</th>*/
/*         <th> Discount % </th>*/
/*         <th>Description</th>*/
/*         */
/*         */
/*         {% for coupon in pagination %}*/
/*  */
/*     */
/*     <tr data-id="{{coupon.id}}">*/
/*     <td> {{coupon.idCategorie.getNom()}} </td> <br/>*/
/*     <td> {{coupon.code}} </td> <br/>*/
/*     <td>   {{coupon.discount}}   </td><br/>*/
/*     <td>   {{coupon.description}}   </td><br/>*/
/*     */
/*         <td> <a href="{{path('tmall_vendor_rejectCoupon',{'id':coupon.id})}}" name="Rejected" class="btn btn-danger">Delete</a></td> <br/>*/
/* */
/*     */
/*     */
/*     </tr>*/
/*     */
/* */
/*     {% endfor %}*/
/*     */
/*   */
/*     </table>  */
/* */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*        */
/*     {# display navigation #}*/
/* <div class="navigation">*/
/*     {{ knp_pagination_render(pagination) }}*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{parent()}}*/
/*     */
/*     <script src="{{asset('vendor/js/data-coupon.js')}}"> </script>*/
/*     */
/* {% endblock %}*/
