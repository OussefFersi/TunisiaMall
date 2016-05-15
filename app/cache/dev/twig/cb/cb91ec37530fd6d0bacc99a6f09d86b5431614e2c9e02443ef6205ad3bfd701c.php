<?php

/* TMallVendorBundle:Default:approve.html.twig */
class __TwigTemplate_ca3d35bb171e50cae9527bb27350c88f4973ea664fa6efd3d1615f66b7181ba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TMallVendorBundle::layout.html.twig", "TMallVendorBundle:Default:approve.html.twig", 1);
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
        echo $this->env->getExtension('routing')->getPath("t_mall_vendor_homepage");
        echo "\">Home</a>

</li>
<li class=\"dropdown\"><a class=\"main-top-link\" href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("t_mall_client_listBoutique");
        echo "\">Create Store</a>

</li>
<li class=\"dropdown\"><a class=\"main-top-link\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("tmall_vendor_MyStores");
        echo "\">Stores</a>

</li>
<li class=\"dropdown\"><a class=\"main-top-link\" href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("t_mall_vendor_approve");
        echo "\">Orders</a>
<ul class=\"text-left dropdown-menu\">
<li ondragstart=\"javascript:dragStart()\" id=\"orders-approve\" class=\"menu-sub-link\"><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("t_mall_vendor_approve");
        echo "\">New Orders</a></li>
<li ondragstart=\"javascript:dragStart()\" id=\"orders-rejected\" class=\"menu-sub-link\"><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("t_mall_vendor_rejected");
        echo "\">Rejected Orders</a></li>
<li ondragstart=\"javascript:dragStart()\" id=\"orders-approved\" class=\"menu-sub-link\"><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("t_mall_vendor_approved");
        echo "\">Approved Orders</a></li>
<li ondragstart=\"javascript:dragStart()\" id=\"orders-customers\" class=\"menu-sub-link\"><a href=\"\">Customers</a></li>
<li ondragstart=\"javascript:dragStart()\" id=\"orders-coupons\" class=\"menu-sub-link\"><a href=\"";
        // line 34
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

    // line 70
    public function block_container($context, array $blocks = array())
    {
        // line 71
        echo "

<div class=\"container\">\t
\t
\t<div id=\"main_content\" class=\"text-left col-md-12 min-height-300\">
\t\t
\t\t<div class=\"fright\">
\t<a class=\"small-tile green-back\" href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("t_mall_vendor_approved");
        echo "\"><img class=\"pull-right\" width=\"32\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/images/icons/approved.png"), "html", null, true);
        echo "\"><h3 class=\"h3-tile\">Approved Orders</h3>
\t</a><a class=\"small-tile red-back\" href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("t_mall_vendor_rejected");
        echo "\"><img class=\"pull-right\" width=\"32\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/images/icons/rejected.png"), "html", null, true);
        echo "\"><h3 class=\"h3-tile\">Rejected Orders</h3>
\t<a class=\"small-tile green-back\" href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("t_mall_vendor_addOrder");
        echo "\"><img class=\"pull-right\" width=\"32\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/images/icons/approved.png"), "html", null, true);
        echo "\"><h3 class=\"h3-tile\">Add Order</h3>

        </a></div>
<div class=\"clear\"></div>

<h3>
\tApprove the latest orders</h3>
<br><br>

                <table class=\"table\" style=\"width :100%\">
    
        <th>Name Product</th>
        <th>Name User</th>
        <th> Date </th>
        <th>Price</th>
        <th>Quantity</th>
        <th></th>
        ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 98
            echo " 
    
    <tr>
    <td> ";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "idProduit", array()), "getTitre", array(), "method"), "html", null, true);
            echo " </td> <br/>
    <td> ";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "idUser", array()), "getUsername", array(), "method"), "html", null, true);
            echo " </td> <br/>
    <td>   ";
            // line 103
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "date", array()), "d/m/Y"), "html", null, true);
            echo "   </td><br/>
    <td>   ";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "prix", array()), "html", null, true);
            echo "   </td><br/>
    <td>   ";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "quantite", array()), "html", null, true);
            echo "   </td><br/>
    <td> <a href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tmall_vendor_affirmOrder", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
            echo "\" name=\"Approve\" class=\"btn btn-primary\">Approve</a></td> <br/>
    <td> <a href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tmall_vendor_rejectOrder", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
            echo "\" name=\"Rejected\" class=\"btn btn-danger\">Reject</a></td> <br/>
    <td> <a href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tmall_vendor_deleteOrder", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
            echo "\" name=\"Rejected\" class=\"btn btn-success\">Delete</a></td> <br/>
    <td> <a href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tmall_vendor_editOrder", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
            echo "\" name=\"Edit\" class=\"btn btn-warning\">Edit</a></td> <br/>
   <td> <a href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tmall_vendor_showPDF", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
            echo "\" name=\"Edit\" class=\"btn btn-info\">Download pdf</a></td> <br/>
   
    
    
    </tr>
    

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "    
  
    </table>    
    
    



\t\t
\t\t\t\t
\t\t<div class=\"clear\"></div>
\t\t<br><br>
\t</div>

    
    
    
    
    ";
        // line 137
        echo "<div class=\"navigation\">
    ";
        // line 138
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
</div>


";
    }

    public function getTemplateName()
    {
        return "TMallVendorBundle:Default:approve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 138,  253 => 137,  233 => 118,  219 => 110,  215 => 109,  211 => 108,  207 => 107,  203 => 106,  199 => 105,  195 => 104,  191 => 103,  187 => 102,  183 => 101,  178 => 98,  174 => 97,  152 => 80,  146 => 79,  140 => 78,  131 => 71,  128 => 70,  88 => 34,  83 => 32,  79 => 31,  75 => 30,  70 => 28,  64 => 25,  58 => 22,  52 => 19,  43 => 13,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "TMallVendorBundle::layout.html.twig" %}*/
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
/* <li class="dropdown"><a class="main-top-link" href="{{path('t_mall_vendor_homepage')}}">Home</a>*/
/* */
/* </li>*/
/* <li class="dropdown"><a class="main-top-link" href="{{path('t_mall_client_listBoutique')}}">Create Store</a>*/
/* */
/* </li>*/
/* <li class="dropdown"><a class="main-top-link" href="{{path('tmall_vendor_MyStores')}}">Stores</a>*/
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
/* */
/* <div class="container">	*/
/* 	*/
/* 	<div id="main_content" class="text-left col-md-12 min-height-300">*/
/* 		*/
/* 		<div class="fright">*/
/* 	<a class="small-tile green-back" href="{{path('t_mall_vendor_approved')}}"><img class="pull-right" width="32" src="{{asset('vendor/images/icons/approved.png')}}"><h3 class="h3-tile">Approved Orders</h3>*/
/* 	</a><a class="small-tile red-back" href="{{path('t_mall_vendor_rejected')}}"><img class="pull-right" width="32" src="{{asset('vendor/images/icons/rejected.png')}}"><h3 class="h3-tile">Rejected Orders</h3>*/
/* 	<a class="small-tile green-back" href="{{path('t_mall_vendor_addOrder')}}"><img class="pull-right" width="32" src="{{asset('vendor/images/icons/approved.png')}}"><h3 class="h3-tile">Add Order</h3>*/
/* */
/*         </a></div>*/
/* <div class="clear"></div>*/
/* */
/* <h3>*/
/* 	Approve the latest orders</h3>*/
/* <br><br>*/
/* */
/*                 <table class="table" style="width :100%">*/
/*     */
/*         <th>Name Product</th>*/
/*         <th>Name User</th>*/
/*         <th> Date </th>*/
/*         <th>Price</th>*/
/*         <th>Quantity</th>*/
/*         <th></th>*/
/*         {% for commande in pagination %}*/
/*  */
/*     */
/*     <tr>*/
/*     <td> {{commande.idProduit.getTitre()}} </td> <br/>*/
/*     <td> {{commande.idUser.getUsername()}} </td> <br/>*/
/*     <td>   {{commande.date|date('d/m/Y')}}   </td><br/>*/
/*     <td>   {{commande.prix}}   </td><br/>*/
/*     <td>   {{commande.quantite}}   </td><br/>*/
/*     <td> <a href="{{path('tmall_vendor_affirmOrder',{'id':commande.id})}}" name="Approve" class="btn btn-primary">Approve</a></td> <br/>*/
/*     <td> <a href="{{path('tmall_vendor_rejectOrder',{'id':commande.id})}}" name="Rejected" class="btn btn-danger">Reject</a></td> <br/>*/
/*     <td> <a href="{{path('tmall_vendor_deleteOrder',{'id':commande.id})}}" name="Rejected" class="btn btn-success">Delete</a></td> <br/>*/
/*     <td> <a href="{{path('tmall_vendor_editOrder',{'id':commande.id})}}" name="Edit" class="btn btn-warning">Edit</a></td> <br/>*/
/*    <td> <a href="{{path('tmall_vendor_showPDF',{'id':commande.id})}}" name="Edit" class="btn btn-info">Download pdf</a></td> <br/>*/
/*    */
/*     */
/*     */
/*     </tr>*/
/*     */
/* */
/*     {% endfor %}*/
/*     */
/*   */
/*     </table>    */
/*     */
/*     */
/* */
/* */
/* */
/* 		*/
/* 				*/
/* 		<div class="clear"></div>*/
/* 		<br><br>*/
/* 	</div>*/
/* */
/*     */
/*     */
/*     */
/*     */
/*     {# display navigation #}*/
/* <div class="navigation">*/
/*     {{ knp_pagination_render(pagination) }}*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
