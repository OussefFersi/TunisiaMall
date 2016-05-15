<?php

/* TmallAdminBundle:Default:index.html.twig */
class __TwigTemplate_1054402517b1bd0c9355e7974972c0be0765b1cef67c6f22342ee15b4932ed2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TMallClientBundle::admin_layout.html.twig", "TmallAdminBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TMallClientBundle::admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
        <div id=\"page-wrapper\">
            <div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\" id=\"main-content\">
\t\t\t\t<!--main content area-->
\t\t\t
                 <div class=\"row\">
\t<div class=\"col-lg-3 col-md-6\">
\t\t<div class=\"panel panel-info\">
\t\t<div class=\"panel-heading\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-3\">
\t\t\t\t\t\t<i class=\"white-link fa fa-shopping-cart fa-5x\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-xs-9 text-right\">
\t\t\t\t\t\t<div class=\"huge\">10</div>
\t\t\t\t\t\t<div>Products</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<a href=\"#products_manager-products\">
\t\t\t
\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t<span class=\"pull-left\">View Details</span>
\t\t\t\t\t<span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t</a>
\t\t</div>
\t</div>
\t<div class=\"col-lg-3 col-md-6\">
\t\t<div class=\"panel panel-green\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-3\">
\t\t\t\t\t\t<i class=\"fa fa-users fa-5x\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-9 text-right\">
\t\t\t\t\t\t<div class=\"huge\">3</div>
\t\t\t\t\t\t<div>Vendors</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<a href=\"#stores-users\">
\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t<span class=\"pull-left\">View Details</span>
\t\t\t\t\t<span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t</a>
\t\t</div>
\t</div>
\t<div class=\"col-lg-3 col-md-6\">
\t\t<div class=\"panel panel-yellow\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-3\">
\t\t\t\t\t\t<i class=\"fa fa-institution fa-5x\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-9 text-right\">
\t\t\t\t\t\t<div class=\"huge\">44</div>
\t\t\t\t\t\t<div>Orders</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<a href=\"#orders-orders\">
\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t<span class=\"pull-left\">View Details</span>
\t\t\t\t\t<span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t</a>
\t\t</div>
\t</div>
\t<div class=\"col-lg-3 col-md-6\">
\t\t<div class=\"panel panel-red\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-3\">
\t\t\t\t\t\t<i class=\"fa fa-bar-chart-o fa-5x\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-9 text-right\">
\t\t\t\t\t\t<div class=\"huge\">9</div>
\t\t\t\t\t\t<div>Website Visits</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<a href=\"#statistics-reports\">
\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t<span class=\"pull-left\">View Details</span>
\t\t\t\t\t<span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t</a>
\t\t</div>
\t</div>
</div>

<div class=\"row\">

<div class=\"col-lg-12\">
 <div class=\"panel panel-default\">
\t<div class=\"panel-heading\">
\t\tLatest Vendors\t</div>
\t
\t<div style=\"padding:10px\" class=\"btn-block\">
\t<div class=\"xpanel-body\">
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-hover\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t<th>Username</th>
\t\t\t\t\t\t<th>Company</th>
\t\t\t\t\t\t<th>First Name</th>
\t\t\t\t\t\t<th>Last Name</th>
\t\t\t\t\t\t
\t\t\t\t\t\t<th>Package</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr onclick=\"document.location.href='index.php?category=stores&folder=users&page=edit&id=24'\" style=\"cursor: pointer\">
\t\t\t\t\t\t<td>2 months ago</td>
\t\t\t\t\t\t<td>manappr</td>
\t\t\t\t\t\t<td>manappr</td>
\t\t\t\t\t\t<td>manappr</td>
\t\t\t\t\t\t<td>manappr</td>
\t\t\t\t\t\t<td>Test Package 1</td>
\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr onclick=\"document.location.href='index.php?category=stores&folder=users&page=edit&id=23'\" style=\"cursor: pointer\">
\t\t\t\t\t\t<td>4 months ago</td>
\t\t\t\t\t\t<td>mytest</td>
\t\t\t\t\t\t<td>Test Company</td>
\t\t\t\t\t\t<td>Anton</td>
\t\t\t\t\t\t<td>Testing</td>
\t\t\t\t\t\t<td>Test Package 1</td>
\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr onclick=\"document.location.href='index.php?category=stores&folder=users&page=edit&id=14'\" style=\"cursor: pointer\">
\t\t\t\t\t\t<td>1 year ago</td>
\t\t\t\t\t\t<td>bestcameras</td>
\t\t\t\t\t\t<td>Best Cameras</td>
\t\t\t\t\t\t<td>fdg</td>
\t\t\t\t\t\t<td>dfg</td>
\t\t\t\t\t\t<td>Test Package 1</td>
\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t<!-- /.table-responsive -->
\t</div>
\t
\t\t<a href=\"#stores-users\" class=\"btn btn-default btn-block\">View All Vendors</a>
\t</div>
\t<!-- /.panel-body -->
</div>
</div>

</div>


<div class=\"row\">
<div class=\"col-lg-8\">
\t
<div class=\"panel panel-default\">
\t<div class=\"panel-heading\">
\t\tOrder Statistics\t</div>
\t
\t<div class=\"panel-body\">
\t\t<div class=\"flot-chart\">
\t\t\t<div class=\"flot-chart-content\" id=\"flot-bar-chart\"></div>
\t\t</div>
\t</div>
\t
</div>

\t
</div>
 
\t <div class=\"col-lg-4\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<i class=\"fa fa-bell fa-fw\"></i> Latest Orders\t\t\t</div>
\t\t\t
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t<a href=\"index.php?category=orders&action=details&id=44\" class=\"list-group-item\">
\t\t\t\t\t
\t\t\t\t\t\t\$149.00,
\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t
\t\t\t\t\t\tmytest\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"pull-right text-muted small\"><em>2 months ago</em>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t<a href=\"index.php?category=orders&action=details&id=39\" class=\"list-group-item\">
\t\t\t\t\t
\t\t\t\t\t\t\$149.00,
\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t
\t\t\t\t\t\tmytest\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"pull-right text-muted small\"><em>2 months ago</em>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t<a href=\"index.php?category=orders&action=details&id=37\" class=\"list-group-item\">
\t\t\t\t\t
\t\t\t\t\t\t\$99.00,
\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t
\t\t\t\t\t\tatnsolutions\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"pull-right text-muted small\"><em>7 months ago</em>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t<a href=\"index.php?category=orders&action=details&id=36\" class=\"list-group-item\">
\t\t\t\t\t
\t\t\t\t\t\t\$25.2,
\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t
\t\t\t\t\t\tbestcameras\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"pull-right text-muted small\"><em>9 months ago</em>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t<a href=\"index.php?category=orders&action=details&id=35\" class=\"list-group-item\">
\t\t\t\t\t
\t\t\t\t\t\t\$20.00,
\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t
\t\t\t\t\t\tbestcameras\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"pull-right text-muted small\"><em>9 months ago</em>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t<a href=\"index.php?category=orders&action=details&id=34\" class=\"list-group-item\">
\t\t\t\t\t
\t\t\t\t\t\t\$21.2,
\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t
\t\t\t\t\t\tbestcameras\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"pull-right text-muted small\"><em>9 months ago</em>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t<a href=\"index.php?category=orders&action=details&id=33\" class=\"list-group-item\">
\t\t\t\t\t
\t\t\t\t\t\t\$20.00,
\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t
\t\t\t\t\t\tbestcameras\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"pull-right text-muted small\"><em>9 months ago</em>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t<a href=\"index.php?category=orders&action=details&id=32\" class=\"list-group-item\">
\t\t\t\t\t
\t\t\t\t\t\t\$20.00,
\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t
\t\t\t\t\t\tbestcameras\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"pull-right text-muted small\"><em>9 months ago</em>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<a href=\"#orders-orders\" class=\"btn btn-default btn-block\">View All Orders</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t
</div>\t\t\t
\t\t\t
\t


\t
<script src=\"js/plugins/flot/jquery.flot.js\"></script>
<script src=\"js/plugins/flot/jquery.flot.categories.js\"></script>


<script type=\"text/javascript\">

\t\$(function() {

\t\tif(document.getElementById(\"flot-bar-chart\"))
\t\t{
\t\t\t
\t\t\tvar data = [[\"September 9\",7], [\"September 8\",35], [\"September 25\",10], [\"September 23\",49], [\"September 19\",995], [\"September 1\",4.5], [\"October 21\",99]];
\t\t\t
\t\t\$.plot(\"#flot-bar-chart\", [ data ], {
\t\t\tseries: {
\t\t\t\tbars: {
\t\t\t\t\tshow: true,
\t\t\t\t\tbarWidth: 0.6,
\t\t\t\t\talign: \"center\"
\t\t\t\t}
\t\t\t},
\t\t\txaxis: {
\t\t\t\tmode: \"categories\",
\t\t\t\ttickLength: 0
\t\t\t},
\t\t\tyaxis: 
\t\t\t{
\t\t\ttickFormatter: function(val, axis) { return val < axis.max ? val.toFixed(2) : \"\$ / Day\";}
\t\t\t}
\t\t});
\t\t}

\t});

\t</script>\t
\t\t
\t
\t\t
\t\t
               
\t\t\t   <!--end main content area-->
\t\t\t\t</div>
            </div>
           
        </div>
 


";
    }

    public function getTemplateName()
    {
        return "TmallAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "TMallClientBundle::admin_layout.html.twig" %}*/
/* {% block  content %}*/
/* */
/*         <div id="page-wrapper">*/
/*             <div class="row">*/
/* 				<div class="col-lg-12" id="main-content">*/
/* 				<!--main content area-->*/
/* 			*/
/*                  <div class="row">*/
/* 	<div class="col-lg-3 col-md-6">*/
/* 		<div class="panel panel-info">*/
/* 		<div class="panel-heading">*/
/* 				<div class="row">*/
/* 					<div class="col-xs-3">*/
/* 						<i class="white-link fa fa-shopping-cart fa-5x"></i>*/
/* 					</div>*/
/* 					*/
/* 					<div class="col-xs-9 text-right">*/
/* 						<div class="huge">10</div>*/
/* 						<div>Products</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<a href="#products_manager-products">*/
/* 			*/
/* 				<div class="panel-footer">*/
/* 					<span class="pull-left">View Details</span>*/
/* 					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>*/
/* 					<div class="clearfix"></div>*/
/* 				</div>*/
/* 			</a>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="col-lg-3 col-md-6">*/
/* 		<div class="panel panel-green">*/
/* 			<div class="panel-heading">*/
/* 				<div class="row">*/
/* 					<div class="col-xs-3">*/
/* 						<i class="fa fa-users fa-5x"></i>*/
/* 					</div>*/
/* 					<div class="col-xs-9 text-right">*/
/* 						<div class="huge">3</div>*/
/* 						<div>Vendors</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<a href="#stores-users">*/
/* 				<div class="panel-footer">*/
/* 					<span class="pull-left">View Details</span>*/
/* 					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>*/
/* 					<div class="clearfix"></div>*/
/* 				</div>*/
/* 			</a>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="col-lg-3 col-md-6">*/
/* 		<div class="panel panel-yellow">*/
/* 			<div class="panel-heading">*/
/* 				<div class="row">*/
/* 					<div class="col-xs-3">*/
/* 						<i class="fa fa-institution fa-5x"></i>*/
/* 					</div>*/
/* 					<div class="col-xs-9 text-right">*/
/* 						<div class="huge">44</div>*/
/* 						<div>Orders</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<a href="#orders-orders">*/
/* 				<div class="panel-footer">*/
/* 					<span class="pull-left">View Details</span>*/
/* 					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>*/
/* 					<div class="clearfix"></div>*/
/* 				</div>*/
/* 			</a>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="col-lg-3 col-md-6">*/
/* 		<div class="panel panel-red">*/
/* 			<div class="panel-heading">*/
/* 				<div class="row">*/
/* 					<div class="col-xs-3">*/
/* 						<i class="fa fa-bar-chart-o fa-5x"></i>*/
/* 					</div>*/
/* 					<div class="col-xs-9 text-right">*/
/* 						<div class="huge">9</div>*/
/* 						<div>Website Visits</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<a href="#statistics-reports">*/
/* 				<div class="panel-footer">*/
/* 					<span class="pull-left">View Details</span>*/
/* 					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>*/
/* 					<div class="clearfix"></div>*/
/* 				</div>*/
/* 			</a>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="row">*/
/* */
/* <div class="col-lg-12">*/
/*  <div class="panel panel-default">*/
/* 	<div class="panel-heading">*/
/* 		Latest Vendors	</div>*/
/* 	*/
/* 	<div style="padding:10px" class="btn-block">*/
/* 	<div class="xpanel-body">*/
/* 		<div class="table-responsive">*/
/* 			<table class="table table-hover">*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<th>Date</th>*/
/* 						<th>Username</th>*/
/* 						<th>Company</th>*/
/* 						<th>First Name</th>*/
/* 						<th>Last Name</th>*/
/* 						*/
/* 						<th>Package</th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody>*/
/* 									<tr onclick="document.location.href='index.php?category=stores&folder=users&page=edit&id=24'" style="cursor: pointer">*/
/* 						<td>2 months ago</td>*/
/* 						<td>manappr</td>*/
/* 						<td>manappr</td>*/
/* 						<td>manappr</td>*/
/* 						<td>manappr</td>*/
/* 						<td>Test Package 1</td>*/
/* 					</tr>*/
/* 									<tr onclick="document.location.href='index.php?category=stores&folder=users&page=edit&id=23'" style="cursor: pointer">*/
/* 						<td>4 months ago</td>*/
/* 						<td>mytest</td>*/
/* 						<td>Test Company</td>*/
/* 						<td>Anton</td>*/
/* 						<td>Testing</td>*/
/* 						<td>Test Package 1</td>*/
/* 					</tr>*/
/* 									<tr onclick="document.location.href='index.php?category=stores&folder=users&page=edit&id=14'" style="cursor: pointer">*/
/* 						<td>1 year ago</td>*/
/* 						<td>bestcameras</td>*/
/* 						<td>Best Cameras</td>*/
/* 						<td>fdg</td>*/
/* 						<td>dfg</td>*/
/* 						<td>Test Package 1</td>*/
/* 					</tr>*/
/* 								</tbody>*/
/* 			</table>*/
/* 		</div>*/
/* 		<!-- /.table-responsive -->*/
/* 	</div>*/
/* 	*/
/* 		<a href="#stores-users" class="btn btn-default btn-block">View All Vendors</a>*/
/* 	</div>*/
/* 	<!-- /.panel-body -->*/
/* </div>*/
/* </div>*/
/* */
/* </div>*/
/* */
/* */
/* <div class="row">*/
/* <div class="col-lg-8">*/
/* 	*/
/* <div class="panel panel-default">*/
/* 	<div class="panel-heading">*/
/* 		Order Statistics	</div>*/
/* 	*/
/* 	<div class="panel-body">*/
/* 		<div class="flot-chart">*/
/* 			<div class="flot-chart-content" id="flot-bar-chart"></div>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* </div>*/
/* */
/* 	*/
/* </div>*/
/*  */
/* 	 <div class="col-lg-4">*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<i class="fa fa-bell fa-fw"></i> Latest Orders			</div>*/
/* 			*/
/* 			<div class="panel-body">*/
/* 				<div class="list-group">*/
/* 								*/
/* 					<a href="index.php?category=orders&action=details&id=44" class="list-group-item">*/
/* 					*/
/* 						$149.00,*/
/* 						<i class="fa fa-user"></i>*/
/* 						*/
/* 						mytest						*/
/* 						<span class="pull-right text-muted small"><em>2 months ago</em>*/
/* 						</span>*/
/* 					</a>*/
/* 								*/
/* 					<a href="index.php?category=orders&action=details&id=39" class="list-group-item">*/
/* 					*/
/* 						$149.00,*/
/* 						<i class="fa fa-user"></i>*/
/* 						*/
/* 						mytest						*/
/* 						<span class="pull-right text-muted small"><em>2 months ago</em>*/
/* 						</span>*/
/* 					</a>*/
/* 								*/
/* 					<a href="index.php?category=orders&action=details&id=37" class="list-group-item">*/
/* 					*/
/* 						$99.00,*/
/* 						<i class="fa fa-user"></i>*/
/* 						*/
/* 						atnsolutions						*/
/* 						<span class="pull-right text-muted small"><em>7 months ago</em>*/
/* 						</span>*/
/* 					</a>*/
/* 								*/
/* 					<a href="index.php?category=orders&action=details&id=36" class="list-group-item">*/
/* 					*/
/* 						$25.2,*/
/* 						<i class="fa fa-user"></i>*/
/* 						*/
/* 						bestcameras						*/
/* 						<span class="pull-right text-muted small"><em>9 months ago</em>*/
/* 						</span>*/
/* 					</a>*/
/* 								*/
/* 					<a href="index.php?category=orders&action=details&id=35" class="list-group-item">*/
/* 					*/
/* 						$20.00,*/
/* 						<i class="fa fa-user"></i>*/
/* 						*/
/* 						bestcameras						*/
/* 						<span class="pull-right text-muted small"><em>9 months ago</em>*/
/* 						</span>*/
/* 					</a>*/
/* 								*/
/* 					<a href="index.php?category=orders&action=details&id=34" class="list-group-item">*/
/* 					*/
/* 						$21.2,*/
/* 						<i class="fa fa-user"></i>*/
/* 						*/
/* 						bestcameras						*/
/* 						<span class="pull-right text-muted small"><em>9 months ago</em>*/
/* 						</span>*/
/* 					</a>*/
/* 								*/
/* 					<a href="index.php?category=orders&action=details&id=33" class="list-group-item">*/
/* 					*/
/* 						$20.00,*/
/* 						<i class="fa fa-user"></i>*/
/* 						*/
/* 						bestcameras						*/
/* 						<span class="pull-right text-muted small"><em>9 months ago</em>*/
/* 						</span>*/
/* 					</a>*/
/* 								*/
/* 					<a href="index.php?category=orders&action=details&id=32" class="list-group-item">*/
/* 					*/
/* 						$20.00,*/
/* 						<i class="fa fa-user"></i>*/
/* 						*/
/* 						bestcameras						*/
/* 						<span class="pull-right text-muted small"><em>9 months ago</em>*/
/* 						</span>*/
/* 					</a>*/
/* 								</div>*/
/* 				*/
/* 				<a href="#orders-orders" class="btn btn-default btn-block">View All Orders</a>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* </div>			*/
/* 			*/
/* 	*/
/* */
/* */
/* 	*/
/* <script src="js/plugins/flot/jquery.flot.js"></script>*/
/* <script src="js/plugins/flot/jquery.flot.categories.js"></script>*/
/* */
/* */
/* <script type="text/javascript">*/
/* */
/* 	$(function() {*/
/* */
/* 		if(document.getElementById("flot-bar-chart"))*/
/* 		{*/
/* 			*/
/* 			var data = [["September 9",7], ["September 8",35], ["September 25",10], ["September 23",49], ["September 19",995], ["September 1",4.5], ["October 21",99]];*/
/* 			*/
/* 		$.plot("#flot-bar-chart", [ data ], {*/
/* 			series: {*/
/* 				bars: {*/
/* 					show: true,*/
/* 					barWidth: 0.6,*/
/* 					align: "center"*/
/* 				}*/
/* 			},*/
/* 			xaxis: {*/
/* 				mode: "categories",*/
/* 				tickLength: 0*/
/* 			},*/
/* 			yaxis: */
/* 			{*/
/* 			tickFormatter: function(val, axis) { return val < axis.max ? val.toFixed(2) : "$ / Day";}*/
/* 			}*/
/* 		});*/
/* 		}*/
/* */
/* 	});*/
/* */
/* 	</script>	*/
/* 		*/
/* 	*/
/* 		*/
/* 		*/
/*                */
/* 			   <!--end main content area-->*/
/* 				</div>*/
/*             </div>*/
/*            */
/*         </div>*/
/*  */
/* */
/* */
/* {% endblock %}*/
