<?php

/* TMallClientBundle::admin_layout.html.twig */
class __TwigTemplate_f2ca26891612aec5dce437a74238dacb4fa576ab6371c01328713a7c1438c7a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<script>var current_cat=\"\";</script><!DOCTYPE html>
<html lang=\"en\">
<head>

<meta charset=\"utf-8\">
<title>Administration Panel</title>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/stylesheet\" href=\"css/users.css"), "html", null, true);
        echo "\"/>
<link rel=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/stylesheet\" href=\"css/main.css"), "html", null, true);
        echo "\"/>
<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/css/layout.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/font-awesome-4.1.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/context_menu.js"), "html", null, true);
        echo "\"></script>


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
\t<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"), "html", null, true);
        echo "\"></script>
<![endif]-->
<script>
block_ajax=false;
</script>
</head>

<body onload=\"PageLoaded()\">

    <div id=\"wrapper\">

        <!-- Navigation -->
        <nav class=\"navbar navbar-default navbar-static-top top-bar\" role=\"navigation\" style=\"margin-bottom: 0;\">
            <div class=\"navbar-header\">
                <button id=\"main_nav_button\" type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand white-link\" href=\"index.php\" ><h4 class=\"no-top-margin\">Mall Demo</h4></a>
\t\t\t\t<img id=\"loading\" class=\"loading-image lfloat\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/images/loading.gif"), "html", null, true);
        echo "\" width=\"120\" alt=\"loading\"/>
\t\t\t
            </div>
            <!-- /.navbar-header -->

            <ul class=\"nav navbar-top-links navbar-right hide-sm\">
\t\t\t
\t\t\t\t<li class=\"dropdown\">
\t<a target=\"_blank\" class=\"white-link\" href=\"../index.php\">
\t   open the website\t</a>
<li class=\"dropdown\">
\t<a class=\"dropdown-toggle white-link\" data-toggle=\"dropdown\" href=\"#\">
\t\t<i class=\"fa fa-envelope fa-fw\"></i>  <i class=\"fa fa-caret-down\"></i>
\t</a>
\t<ul class=\"dropdown-menu dropdown-messages\">
\t\t\t\t<li>
\t\t\t<a href=\"#home-messages\" >
\t\t\t\t<div>
\t\t\t\t\t<strong></strong>
\t\t\t\t\t<span class=\"pull-right text-muted\">
\t\t\t\t\t\t<em>9 months</em>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t\t<div>anton</div>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"divider\"></li>
\t\t\t\t<li>
\t\t\t<a href=\"#home-messages\" >
\t\t\t\t<div>
\t\t\t\t\t<strong></strong>
\t\t\t\t\t<span class=\"pull-right text-muted\">
\t\t\t\t\t\t<em>9 months</em>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t\t<div>anton</div>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"divider\"></li>
\t\t\t\t<li>
\t\t\t<a href=\"#home-messages\" >
\t\t\t\t<div>
\t\t\t\t\t<strong></strong>
\t\t\t\t\t<span class=\"pull-right text-muted\">
\t\t\t\t\t\t<em>1 year</em>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t\t<div>ghdfghd</div>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"divider\"></li>
\t\t\t\t<li class=\"text-center top-link-li\">
\t\t\t<strong>
\t\t\t\t\t\t\t\t<a class=\"text-center\" href=\"#home-messages\">
\t\t\t\t
\t\t\t\t\tRead All Messages\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>
\t\t\t\t</a>
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t
\t\t</li>
\t</ul>
</li>


<li class=\"dropdown\">
\t<a class=\"dropdown-toggle white-link\" data-toggle=\"dropdown\" href=\"#\">
\t   administrator <i class=\"fa fa-user fa-fw\"></i>  <i class=\"fa fa-caret-down\"></i>
\t</a>
\t<ul class=\"dropdown-menu dropdown-user\">
\t  
\t\t<li><a href=\"index.php?category=exit&action=exit\"><i class=\"fa fa-sign-out fa-fw\"></i> Logout</a>
\t\t</li>
\t</ul>
</li>
            </ul>
            <!-- /.navbar-top-links -->

            <div  id=\"main_navigation\" class=\"navbar-default sidebar\" role=\"navigation\">
                <div class=\"sidebar-nav navbar-collapse\">
                    <ul class=\"nav\" id=\"side-menu\">
\t\t\t\t\t
                       
<li><a class=\"f-level\" id=\"link_home\" href=\"index.php\">Home</a>
<ul class=\"nav nav-second-level\" >
<li ><a class=\"s-level\" href=\"index.php\">Dashboard</a></li>
<li ><a class=\"s-level\" href=\"#home-messages\">Messages</a></li>
<li ><a class=\"s-level\" href=\"#home-connections\">Login Report</a></li>
<li ><a class=\"s-level\" href=\"#home-password\">Change Password</a></li>
</ul>
</li>
<li><a class=\"f-level\" id=\"link_stores\"  href=\"#\"><i class=\"fa fa-laptop fa-fw\"></i> Stores<span class=\"fa arrow\"></span></a>
<ul class=\"nav nav-second-level\" >
<li ><a class=\"s-level\" href=\"#stores-users\">Vendors</a></li>
<li ><a class=\"s-level\" href=\"#stores-packages\">Packages</a></li>
<li ><a class=\"s-level\" href=\"#stores-payments\">Payments</a></li>
<li ><a class=\"s-level\" href=\"#stores-advertisments\">Advertisements</a></li>
<li ><a class=\"s-level\" href=\"#stores-commissions\">Commissions</a></li>
<li ><a class=\"s-level\" href=\"#stores-reviews\">Reviews</a></li>
</ul>
</li>
<li><a class=\"f-level\" id=\"link_settings\"  href=\"#\"><i class=\"fa fa-gears fa-fw\"></i> Settings<span class=\"fa arrow\"></span></a>
<ul class=\"nav nav-second-level\" >
<li ><a class=\"s-level\" href=\"#settings-options\">Configuration Options</a></li>
<li ><a class=\"s-level\" href=\"#settings-categories\">Categories</a></li>
<li ><a class=\"s-level\" href=\"#settings-locations\">Locations</a></li>
</ul>
</li>
<li><a class=\"f-level\" id=\"link_products_manager\"  href=\"#\"><i class=\"fa fa-shopping-cart fa-fw\"></i> Products<span class=\"fa arrow\"></span></a>
<ul class=\"nav nav-second-level\" >
<li ><a class=\"s-level\" href=\"#products_manager-products\">Products</a></li>
<li ><a class=\"s-level\" href=\"#products_manager-reviews\">Reviews</a></li>
</ul>
</li>
<li><a class=\"f-level\" id=\"link_orders\"  href=\"#\"><i class=\"fa fa-money fa-fw\"></i> Orders<span class=\"fa arrow\"></span></a>
<ul class=\"nav nav-second-level\" >
<li ><a class=\"s-level\" href=\"#orders-approve\">New Orders</a></li>
<li ><a class=\"s-level\" href=\"#orders-rejected\">Rejected Orders</a></li>
<li ><a class=\"s-level\" href=\"#orders-approved\">Approved Orders</a></li>
<li ><a class=\"s-level\" href=\"#orders-orders\">Full List</a></li>
<li ><a class=\"s-level\" href=\"#orders-customers\">Customers</a></li>
<li ><a class=\"s-level\" href=\"#orders-coupons\">Coupons</a></li>
<li ><a class=\"s-level\" href=\"#orders-points\">Customer Loyalty Program</a></li>
</ul>
</li>
<li><a class=\"f-level\" id=\"link_site_management\"  href=\"#\"><i class=\"fa fa-sitemap fa-fw\"></i> Site Content<span class=\"fa arrow\"></span></a>
<ul class=\"nav nav-second-level\" >
<li ><a class=\"s-level\" href=\"index.php?category=site_management&action=pages_pro\">Management</a></li>
<li ><a class=\"s-level\" href=\"index.php?category=site_management&action=news\">News</a></li>
<li ><a class=\"s-level\" href=\"#site_management-languages\">Language Versions</a></li>
</ul>
</li>
<li><a class=\"f-level\" id=\"link_extensions\"  href=\"#\"><i class=\"fa fa-sun-o fa-fw\"></i> Extensions<span class=\"fa arrow\"></span></a>
<ul class=\"nav nav-second-level\" >
<li ><a class=\"s-level\" href=\"#extensions-extensions\">Files</a></li>
<li ><a class=\"s-level\" href=\"index.php?category=extensions&action=tags\">Tags</a></li>
<li class=\"menu-sub-link\"><a class=\"s-level\" href=\"index.php?category=faq_manager&action=home\">FAQ Manager [add-on]</a></li>
<li class=\"menu-sub-link\"><a class=\"s-level\" href=\"index.php?category=newsletter&action=home\">Newsletter [add-on]</a></li>
</ul>
</li>
<li><a class=\"f-level\" id=\"link_templates\"  href=\"#\"><i class=\"fa fa-square-o fa-fw\"></i> Templates<span class=\"fa arrow\"></span></a>
<ul class=\"nav nav-second-level\" >
<li ><a class=\"s-level\" href=\"#templates-modify\">Front Site</a></li>
<li ><a class=\"s-level\" href=\"#templates-products\">Products</a></li>
<li ><a class=\"s-level\" href=\"#templates-cart\">Cart</a></li>
</ul>
</li>
<li><a class=\"f-level\" id=\"link_statistics\"  href=\"#\"><i class=\"fa fa-bar-chart-o fa-fw\"></i> Statistics<span class=\"fa arrow\"></span></a>
<ul class=\"nav nav-second-level\" >
<li ><a class=\"s-level\" href=\"#statistics-reports\">Reports</a></li>
<li ><a class=\"s-level\" href=\"#statistics-referals\">Referrals</a></li>
</ul>
</li>
<li><a class=\"f-level\" id=\"link_security\"  href=\"#\"><i class=\"fa fa-users fa-fw\"></i> Admin Users<span class=\"fa arrow\"></span></a>
<ul class=\"nav nav-second-level\" >
<li ><a class=\"s-level\" href=\"#security-types\">User Groups</a></li>
<li ><a class=\"s-level\" href=\"index.php?category=security&action=new_user\">New Administrator</a></li>
<li ><a class=\"s-level\" href=\"#security-admin\">Administrators</a></li>
<li ><a class=\"s-level\" href=\"#security-permissions\">User Permissions</a></li>
</ul>
</li>
                    </ul>
                </div>
               
            </div>
           
        </nav>

        <!-- Page Content -->
 
                                                                                                                               
                                        ";
        // line 214
        $this->displayBlock('content', $context, $blocks);
        echo "                                                                                                                                                                                                                                   
                                                                                                                                                                                                                                                                                                                                                                                       
                                                                                                                                                                                                                       
 
        
    </div>
  
<script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/jquery-1.11.0.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/plugins/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/plugins/flot/jquery.flot.categories.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">

\t\$(function() {

\t\tif(document.getElementById(\"flot-bar-chart\"))
\t\t{
\t\t\tvar data = [ [\"1\", 140],[\"2\", 140],[\"January\", 140], [\"February\", 8], [\"March\", 4], [\"April\", 13], [\"May\", 17], [\"June\", 9] ];

\t\t\t\$.plot(\"#flot-bar-chart\", [ data ], {
\t\t\t\tseries: {
\t\t\t\t\tbars: {
\t\t\t\t\t\tshow: true,
\t\t\t\t\t\tbarWidth: 0.8,
\t\t\t\t\t\talign: \"center\"
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\txaxis: {
\t\t\t\t\tmode: \"categories\",
\t\t\t\t\ttickLength: 0
\t\t\t\t}
\t\t\t});
\t\t
\t\t}

\t});

\t</script>
<script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/plugins/metisMenu/metisMenu.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/admin.js"), "html", null, true);
        echo "\"></script>
\t
<div id=\"ContextMenuContainer\"></div>
<iframe id=\"ajax-ifr\" name=\"ajax-ifr\" src=\"admin/include/empty-page.php\" style=\"position:absolute;top:0px;left:0px;visibility:hidden\" width=\"1\" height=\"1\"> </iframe>


</body>

</html>

";
    }

    // line 214
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TMallClientBundle::admin_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 214,  319 => 253,  315 => 252,  311 => 251,  280 => 223,  276 => 222,  272 => 221,  262 => 214,  89 => 44,  65 => 23,  61 => 22,  52 => 16,  47 => 14,  43 => 13,  39 => 12,  35 => 11,  31 => 10,  20 => 1,);
    }
}
/* */
/* <script>var current_cat="";</script><!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/* */
/* <meta charset="utf-8">*/
/* <title>Administration Panel</title>*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <link rel="{{asset('admin/stylesheet" href="css/users.css')}}"/>*/
/* <link rel="{{asset('admin/stylesheet" href="css/main.css')}}"/>*/
/* <link href="{{asset('admin/css/bootstrap.css')}}" rel="stylesheet">*/
/* <link href="{{asset('admin/css/layout.css')}}" rel="stylesheet">*/
/* <link href="{{asset('admin/font-awesome-4.1.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">*/
/* */
/* <script type="text/javascript" src="{{asset('admin/js/context_menu.js')}}"></script>*/
/* */
/* */
/* <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/* <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/* <!--[if lt IE 9]>*/
/* 	<script src="{{asset('admin/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>*/
/* 	<script src="{{asset('admin/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>*/
/* <![endif]-->*/
/* <script>*/
/* block_ajax=false;*/
/* </script>*/
/* </head>*/
/* */
/* <body onload="PageLoaded()">*/
/* */
/*     <div id="wrapper">*/
/* */
/*         <!-- Navigation -->*/
/*         <nav class="navbar navbar-default navbar-static-top top-bar" role="navigation" style="margin-bottom: 0;">*/
/*             <div class="navbar-header">*/
/*                 <button id="main_nav_button" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand white-link" href="index.php" ><h4 class="no-top-margin">Mall Demo</h4></a>*/
/* 				<img id="loading" class="loading-image lfloat" src="{{asset('admin/images/loading.gif')}}" width="120" alt="loading"/>*/
/* 			*/
/*             </div>*/
/*             <!-- /.navbar-header -->*/
/* */
/*             <ul class="nav navbar-top-links navbar-right hide-sm">*/
/* 			*/
/* 				<li class="dropdown">*/
/* 	<a target="_blank" class="white-link" href="../index.php">*/
/* 	   open the website	</a>*/
/* <li class="dropdown">*/
/* 	<a class="dropdown-toggle white-link" data-toggle="dropdown" href="#">*/
/* 		<i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>*/
/* 	</a>*/
/* 	<ul class="dropdown-menu dropdown-messages">*/
/* 				<li>*/
/* 			<a href="#home-messages" >*/
/* 				<div>*/
/* 					<strong></strong>*/
/* 					<span class="pull-right text-muted">*/
/* 						<em>9 months</em>*/
/* 					</span>*/
/* 				</div>*/
/* 				<div>anton</div>*/
/* 			</a>*/
/* 		</li>*/
/* 		<li class="divider"></li>*/
/* 				<li>*/
/* 			<a href="#home-messages" >*/
/* 				<div>*/
/* 					<strong></strong>*/
/* 					<span class="pull-right text-muted">*/
/* 						<em>9 months</em>*/
/* 					</span>*/
/* 				</div>*/
/* 				<div>anton</div>*/
/* 			</a>*/
/* 		</li>*/
/* 		<li class="divider"></li>*/
/* 				<li>*/
/* 			<a href="#home-messages" >*/
/* 				<div>*/
/* 					<strong></strong>*/
/* 					<span class="pull-right text-muted">*/
/* 						<em>1 year</em>*/
/* 					</span>*/
/* 				</div>*/
/* 				<div>ghdfghd</div>*/
/* 			</a>*/
/* 		</li>*/
/* 		<li class="divider"></li>*/
/* 				<li class="text-center top-link-li">*/
/* 			<strong>*/
/* 								<a class="text-center" href="#home-messages">*/
/* 				*/
/* 					Read All Messages					<i class="fa fa-angle-right"></i>*/
/* 				</a>*/
/* 								</strong>*/
/* 				*/
/* 		</li>*/
/* 	</ul>*/
/* </li>*/
/* */
/* */
/* <li class="dropdown">*/
/* 	<a class="dropdown-toggle white-link" data-toggle="dropdown" href="#">*/
/* 	   administrator <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>*/
/* 	</a>*/
/* 	<ul class="dropdown-menu dropdown-user">*/
/* 	  */
/* 		<li><a href="index.php?category=exit&action=exit"><i class="fa fa-sign-out fa-fw"></i> Logout</a>*/
/* 		</li>*/
/* 	</ul>*/
/* </li>*/
/*             </ul>*/
/*             <!-- /.navbar-top-links -->*/
/* */
/*             <div  id="main_navigation" class="navbar-default sidebar" role="navigation">*/
/*                 <div class="sidebar-nav navbar-collapse">*/
/*                     <ul class="nav" id="side-menu">*/
/* 					*/
/*                        */
/* <li><a class="f-level" id="link_home" href="index.php">Home</a>*/
/* <ul class="nav nav-second-level" >*/
/* <li ><a class="s-level" href="index.php">Dashboard</a></li>*/
/* <li ><a class="s-level" href="#home-messages">Messages</a></li>*/
/* <li ><a class="s-level" href="#home-connections">Login Report</a></li>*/
/* <li ><a class="s-level" href="#home-password">Change Password</a></li>*/
/* </ul>*/
/* </li>*/
/* <li><a class="f-level" id="link_stores"  href="#"><i class="fa fa-laptop fa-fw"></i> Stores<span class="fa arrow"></span></a>*/
/* <ul class="nav nav-second-level" >*/
/* <li ><a class="s-level" href="#stores-users">Vendors</a></li>*/
/* <li ><a class="s-level" href="#stores-packages">Packages</a></li>*/
/* <li ><a class="s-level" href="#stores-payments">Payments</a></li>*/
/* <li ><a class="s-level" href="#stores-advertisments">Advertisements</a></li>*/
/* <li ><a class="s-level" href="#stores-commissions">Commissions</a></li>*/
/* <li ><a class="s-level" href="#stores-reviews">Reviews</a></li>*/
/* </ul>*/
/* </li>*/
/* <li><a class="f-level" id="link_settings"  href="#"><i class="fa fa-gears fa-fw"></i> Settings<span class="fa arrow"></span></a>*/
/* <ul class="nav nav-second-level" >*/
/* <li ><a class="s-level" href="#settings-options">Configuration Options</a></li>*/
/* <li ><a class="s-level" href="#settings-categories">Categories</a></li>*/
/* <li ><a class="s-level" href="#settings-locations">Locations</a></li>*/
/* </ul>*/
/* </li>*/
/* <li><a class="f-level" id="link_products_manager"  href="#"><i class="fa fa-shopping-cart fa-fw"></i> Products<span class="fa arrow"></span></a>*/
/* <ul class="nav nav-second-level" >*/
/* <li ><a class="s-level" href="#products_manager-products">Products</a></li>*/
/* <li ><a class="s-level" href="#products_manager-reviews">Reviews</a></li>*/
/* </ul>*/
/* </li>*/
/* <li><a class="f-level" id="link_orders"  href="#"><i class="fa fa-money fa-fw"></i> Orders<span class="fa arrow"></span></a>*/
/* <ul class="nav nav-second-level" >*/
/* <li ><a class="s-level" href="#orders-approve">New Orders</a></li>*/
/* <li ><a class="s-level" href="#orders-rejected">Rejected Orders</a></li>*/
/* <li ><a class="s-level" href="#orders-approved">Approved Orders</a></li>*/
/* <li ><a class="s-level" href="#orders-orders">Full List</a></li>*/
/* <li ><a class="s-level" href="#orders-customers">Customers</a></li>*/
/* <li ><a class="s-level" href="#orders-coupons">Coupons</a></li>*/
/* <li ><a class="s-level" href="#orders-points">Customer Loyalty Program</a></li>*/
/* </ul>*/
/* </li>*/
/* <li><a class="f-level" id="link_site_management"  href="#"><i class="fa fa-sitemap fa-fw"></i> Site Content<span class="fa arrow"></span></a>*/
/* <ul class="nav nav-second-level" >*/
/* <li ><a class="s-level" href="index.php?category=site_management&action=pages_pro">Management</a></li>*/
/* <li ><a class="s-level" href="index.php?category=site_management&action=news">News</a></li>*/
/* <li ><a class="s-level" href="#site_management-languages">Language Versions</a></li>*/
/* </ul>*/
/* </li>*/
/* <li><a class="f-level" id="link_extensions"  href="#"><i class="fa fa-sun-o fa-fw"></i> Extensions<span class="fa arrow"></span></a>*/
/* <ul class="nav nav-second-level" >*/
/* <li ><a class="s-level" href="#extensions-extensions">Files</a></li>*/
/* <li ><a class="s-level" href="index.php?category=extensions&action=tags">Tags</a></li>*/
/* <li class="menu-sub-link"><a class="s-level" href="index.php?category=faq_manager&action=home">FAQ Manager [add-on]</a></li>*/
/* <li class="menu-sub-link"><a class="s-level" href="index.php?category=newsletter&action=home">Newsletter [add-on]</a></li>*/
/* </ul>*/
/* </li>*/
/* <li><a class="f-level" id="link_templates"  href="#"><i class="fa fa-square-o fa-fw"></i> Templates<span class="fa arrow"></span></a>*/
/* <ul class="nav nav-second-level" >*/
/* <li ><a class="s-level" href="#templates-modify">Front Site</a></li>*/
/* <li ><a class="s-level" href="#templates-products">Products</a></li>*/
/* <li ><a class="s-level" href="#templates-cart">Cart</a></li>*/
/* </ul>*/
/* </li>*/
/* <li><a class="f-level" id="link_statistics"  href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Statistics<span class="fa arrow"></span></a>*/
/* <ul class="nav nav-second-level" >*/
/* <li ><a class="s-level" href="#statistics-reports">Reports</a></li>*/
/* <li ><a class="s-level" href="#statistics-referals">Referrals</a></li>*/
/* </ul>*/
/* </li>*/
/* <li><a class="f-level" id="link_security"  href="#"><i class="fa fa-users fa-fw"></i> Admin Users<span class="fa arrow"></span></a>*/
/* <ul class="nav nav-second-level" >*/
/* <li ><a class="s-level" href="#security-types">User Groups</a></li>*/
/* <li ><a class="s-level" href="index.php?category=security&action=new_user">New Administrator</a></li>*/
/* <li ><a class="s-level" href="#security-admin">Administrators</a></li>*/
/* <li ><a class="s-level" href="#security-permissions">User Permissions</a></li>*/
/* </ul>*/
/* </li>*/
/*                     </ul>*/
/*                 </div>*/
/*                */
/*             </div>*/
/*            */
/*         </nav>*/
/* */
/*         <!-- Page Content -->*/
/*  */
/*                                                                                                                                */
/*                                         {% block content %}{% endblock %}                                                                                                                                                                                                                                   */
/*                                                                                                                                                                                                                                                                                                                                                                                        */
/*                                                                                                                                                                                                                        */
/*  */
/*         */
/*     </div>*/
/*   */
/* <script src="{{asset('admin/js/jquery-1.11.0.js')}}"></script>*/
/* <script src="{{asset('admin/js/plugins/flot/jquery.flot.js')}}"></script>*/
/* <script src="{{asset('admin/js/plugins/flot/jquery.flot.categories.js')}}"></script>*/
/* <script type="text/javascript">*/
/* */
/* 	$(function() {*/
/* */
/* 		if(document.getElementById("flot-bar-chart"))*/
/* 		{*/
/* 			var data = [ ["1", 140],["2", 140],["January", 140], ["February", 8], ["March", 4], ["April", 13], ["May", 17], ["June", 9] ];*/
/* */
/* 			$.plot("#flot-bar-chart", [ data ], {*/
/* 				series: {*/
/* 					bars: {*/
/* 						show: true,*/
/* 						barWidth: 0.8,*/
/* 						align: "center"*/
/* 					}*/
/* 				},*/
/* 				xaxis: {*/
/* 					mode: "categories",*/
/* 					tickLength: 0*/
/* 				}*/
/* 			});*/
/* 		*/
/* 		}*/
/* */
/* 	});*/
/* */
/* 	</script>*/
/* <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>*/
/* <script src="{{asset('admin/js/plugins/metisMenu/metisMenu.min.js')}}"></script>*/
/* <script src="{{asset('admin/js/admin.js')}}"></script>*/
/* 	*/
/* <div id="ContextMenuContainer"></div>*/
/* <iframe id="ajax-ifr" name="ajax-ifr" src="admin/include/empty-page.php" style="position:absolute;top:0px;left:0px;visibility:hidden" width="1" height="1"> </iframe>*/
/* */
/* */
/* </body>*/
/* */
/* </html>*/
/* */
/* */
