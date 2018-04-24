<?php

/* TMallVendorBundle:Default:addCoupon.html.twig */
class __TwigTemplate_b1d4b7ce555b615270bd767011b09cee0a5ba2fbcad7da4ab1f43b4cf89c6997 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TMallVendorBundle::layout.html.twig", "TMallVendorBundle:Default:addCoupon.html.twig", 1);
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

    // line 70
    public function block_container($context, array $blocks = array())
    {
        // line 71
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

<h1>Add a new Coupon</h1>

 
    ";
        // line 78
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <div class=\"form-group\">
    
        ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCategorie", array()), 'label');
        echo "
        ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCategorie", array()), 'errors');
        echo "
        ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCategorie", array()), 'widget');
        echo "
    
    </div>
    <div class=\"form-group\">
    
        ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'label');
        echo "
        ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'errors');
        echo "
        ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'widget');
        echo "
    
    </div>
    
    <div class=\"form-group\">
    
        ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "discount", array()), 'label');
        echo "
        ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "discount", array()), 'errors');
        echo "
        ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "discount", array()), 'widget');
        echo "
     
    </div>
        
        
        <div class=\"form-group\">
    
        ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
        ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
        ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
     
    </div>
        
      
        
         
        
";
        // line 116
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t


<h3> your current coupons </h3>


                <table class=\"table\" style=\"width :100%\">
    
        <th>Category</th>
        <th>Code</th>
        <th> Discount % </th>
        <th>Description</th>
        
        
        ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
            // line 132
            echo " 
    
    <tr data-id=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "id", array()), "html", null, true);
            echo "\">
    <td> ";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["coupon"], "idCategorie", array()), "getNom", array(), "method"), "html", null, true);
            echo " </td> <br/>
    <td> ";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "code", array()), "html", null, true);
            echo " </td> <br/>
    <td>   ";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "discount", array()), "html", null, true);
            echo "   </td><br/>
    <td>   ";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "description", array()), "html", null, true);
            echo "   </td><br/>
    
        <td> <a href=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tmall_vendor_rejectCoupon", array("id" => $this->getAttribute($context["coupon"], "id", array()))), "html", null, true);
            echo "\" name=\"Rejected\" class=\"btn btn-danger\">Delete</a></td> <br/>

    
    
    </tr>
    

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "    
  
    </table>  

    
    
    
    
    
    
       
    ";
        // line 160
        echo "<div class=\"navigation\">
    ";
        // line 161
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
</div>








\t<a class=\"small-tile green-back\" href=\"";
        // line 171
        echo $this->env->getExtension('routing')->getPath("tmall_vendor_listCoupon");
        echo "\"><img class=\"pull-right\" width=\"32\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/images/icons/approved.png"), "html", null, true);
        echo "\"><h3 class=\"h3-tile\">liste Coupons</h3>



<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"> </script>
<script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"> </script>






";
    }

    public function getTemplateName()
    {
        return "TMallVendorBundle:Default:addCoupon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 176,  318 => 175,  309 => 171,  296 => 161,  293 => 160,  280 => 148,  266 => 140,  261 => 138,  257 => 137,  253 => 136,  249 => 135,  245 => 134,  241 => 132,  237 => 131,  219 => 116,  208 => 108,  204 => 107,  200 => 106,  190 => 99,  186 => 98,  182 => 97,  173 => 91,  169 => 90,  165 => 89,  157 => 84,  153 => 83,  149 => 82,  143 => 79,  139 => 78,  131 => 72,  128 => 71,  125 => 70,  85 => 34,  80 => 32,  76 => 31,  72 => 30,  67 => 28,  58 => 22,  52 => 19,  43 => 13,  32 => 4,  29 => 3,  11 => 1,);
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
/* <h1>Add a new Coupon</h1>*/
/* */
/*  */
/*     {# ... #}*/
/* {{ form_start(form) }}*/
/*     {{ form_errors(form) }}*/
/*     <div class="form-group">*/
/*     */
/*         {{ form_label(form.idCategorie) }}*/
/*         {{ form_errors(form.idCategorie) }}*/
/*         {{ form_widget(form.idCategorie) }}*/
/*     */
/*     </div>*/
/*     <div class="form-group">*/
/*     */
/*         {{ form_label(form.code) }}*/
/*         {{ form_errors(form.code) }}*/
/*         {{ form_widget(form.code) }}*/
/*     */
/*     </div>*/
/*     */
/*     <div class="form-group">*/
/*     */
/*         {{ form_label(form.discount) }}*/
/*         {{ form_errors(form.discount) }}*/
/*         {{ form_widget(form.discount) }}*/
/*      */
/*     </div>*/
/*         */
/*         */
/*         <div class="form-group">*/
/*     */
/*         {{ form_label(form.description) }}*/
/*         {{ form_errors(form.description) }}*/
/*         {{ form_widget(form.description) }}*/
/*      */
/*     </div>*/
/*         */
/*       */
/*         */
/*          */
/*         */
/* {{ form_end(form) }}*/
/* 	*/
/* */
/* */
/* <h3> your current coupons </h3>*/
/* */
/* */
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
/* */
/* */
/* */
/* */
/* */
/* */
/* 	<a class="small-tile green-back" href="{{path('tmall_vendor_listCoupon')}}"><img class="pull-right" width="32" src="{{asset('vendor/images/icons/approved.png')}}"><h3 class="h3-tile">liste Coupons</h3>*/
/* */
/* */
/* */
/* <script src="{{asset('js/bootstrap.min.js')}}"> </script>*/
/* <script src="{{asset('js/jquery.js')}}"> </script>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
