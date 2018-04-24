<?php

/* TMallVendorBundle:Default:approved.html.twig */
class __TwigTemplate_9f599c459eb8b700e9a4ae2238f9ac660bba820fa06b5aa7fdcf59ae2f03387b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TMallVendorBundle::layout.html.twig", "TMallVendorBundle:Default:approved.html.twig", 1);
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
<li class=\"dropdown\"><a class=\"main-top-link\" href=\"\">Stores</a>

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

    // line 71
    public function block_container($context, array $blocks = array())
    {
        // line 72
        echo "

<div class=\"container\">\t
\t
\t<div id=\"main_content\" class=\"text-left col-md-12 min-height-300\">
\t\t
\t\t
<div class=\"fright\">
\t<a class=\"small-tile green-back\" href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("tmall_vendor_approveOrder");
        echo "\"><img class=\"pull-right\" width=\"32\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/images/icons/approve.png"), "html", null, true);
        echo "\"><h3 class=\"h3-tile\">New Orders</h3>

\t</a></div>
<div class=\"clear\"></div>


<h3>List of the approved orders</h3>


<br>

            <table class=\"table\" style=\"width :100%\">
    
        <th>Name Product</th>
        <th>Name User</th>
        <th> Date </th>
        <th>Price</th>
        <th>Quantity</th>
        <th></th>
        ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 100
            echo " 
    
    <tr>
    <td> ";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "idProduit", array()), "getTitre", array(), "method"), "html", null, true);
            echo " </td> <br/>
    <td> ";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "idUser", array()), "getNom", array(), "method"), "html", null, true);
            echo " </td> <br/>
    <td>   ";
            // line 105
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "date", array()), "d/m/Y"), "html", null, true);
            echo "   </td><br/>
    <td>   ";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "prix", array()), "html", null, true);
            echo "   </td><br/>
    <td>   ";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "quantite", array()), "html", null, true);
            echo "   </td><br/>
<td> <a href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tmall_vendor_rejectOrder", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
            echo "\" name=\"Rejected\" class=\"btn btn-danger\">Reject</a></td> <br/>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "  ";
        // line 113
        echo "<div class=\"navigation\">
    ";
        // line 114
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
</div>

\t\t\t\t
\t\t


        </div>

";
    }

    public function getTemplateName()
    {
        return "TMallVendorBundle:Default:approved.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 114,  203 => 113,  201 => 112,  191 => 108,  187 => 107,  183 => 106,  179 => 105,  175 => 104,  171 => 103,  166 => 100,  162 => 99,  138 => 80,  128 => 72,  125 => 71,  85 => 34,  80 => 32,  76 => 31,  72 => 30,  67 => 28,  58 => 22,  52 => 19,  43 => 13,  32 => 4,  29 => 3,  11 => 1,);
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
/* */
/* {% block container %}*/
/* */
/* */
/* <div class="container">	*/
/* 	*/
/* 	<div id="main_content" class="text-left col-md-12 min-height-300">*/
/* 		*/
/* 		*/
/* <div class="fright">*/
/* 	<a class="small-tile green-back" href="{{path('tmall_vendor_approveOrder')}}"><img class="pull-right" width="32" src="{{asset('vendor/images/icons/approve.png')}}"><h3 class="h3-tile">New Orders</h3>*/
/* */
/* 	</a></div>*/
/* <div class="clear"></div>*/
/* */
/* */
/* <h3>List of the approved orders</h3>*/
/* */
/* */
/* <br>*/
/* */
/*             <table class="table" style="width :100%">*/
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
/*     <td> {{commande.idUser.getNom()}} </td> <br/>*/
/*     <td>   {{commande.date|date('d/m/Y')}}   </td><br/>*/
/*     <td>   {{commande.prix}}   </td><br/>*/
/*     <td>   {{commande.quantite}}   </td><br/>*/
/* <td> <a href="{{path('tmall_vendor_rejectOrder',{'id':commande.id})}}" name="Rejected" class="btn btn-danger">Reject</a></td> <br/>*/
/* */
/* */
/* {% endfor %}*/
/*   {# display navigation #}*/
/* <div class="navigation">*/
/*     {{ knp_pagination_render(pagination) }}*/
/* </div>*/
/* */
/* 				*/
/* 		*/
/* */
/* */
/*         </div>*/
/* */
/* {% endblock %}*/
