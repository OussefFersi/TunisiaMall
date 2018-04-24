<?php

/* TmallAdminBundle:Main:index.html.twig */
class __TwigTemplate_6997753f748954cd16481ad7e7a2d4ad65462010b04894707d82f0ae4ae88675 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>Tunisia Mall | </title>

  <!-- Bootstrap core CSS -->

  <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/fonts/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Custom styling plus plugins -->
  
  <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
   
   
  <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/css/icheck/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  
     
  <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
 

  

</head>


<body class=\"nav-md\">

  <div class=\"container body\">


    <div class=\"main_container\">

      <div class=\"col-md-3 left_col\">
        <div class=\"left_col scroll-view\">

          <div class=\"navbar nav_title\" style=\"border: 0;\">
            <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("tmall_admin_homepage");
        echo "\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>Tunisia Mall!</span></a>
          </div>
          <div class=\"clearfix\"></div>

          <!-- menu prile quick info -->
          <div class=\"profile\">
            <div class=\"profile_pic\">
              <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/images/img.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-circle profile_img\">
            </div>
            <div class=\"profile_info\">
              <span>Welcome,</span>
              <h2>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</h2>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">

            <div class=\"menu_section\">
              <h3>General</h3>
              <ul class=\"nav side-menu\">
                <li><a><i class=\"fa fa-home\"></i> Home <span class=\"fa fa-chevron-down\"></span></a>
                  <ul class=\"nav child_menu\" style=\"display: none\">
                    <li><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("tmall_admin_homepage");
        echo "\">Dashboard</a>
                    </li>
                    
                    
                  </ul>
                </li>
                
                <li><a><i class=\"fa fa-desktop\"></i> Stores <span class=\"fa fa-chevron-down\"></span></a>
                  <ul class=\"nav child_menu\" style=\"display: none\">
                    
                    <li><a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("boutiqueslist");
        echo "\">List Boutiques</a>
                    </li>
                    
                  </ul>
                </li>
                <li><a><i class=\"fa fa-table\"></i> Products <span class=\"fa fa-chevron-down\"></span></a>
                  <ul class=\"nav child_menu\" style=\"display: none\">
                    
                    <li><a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("productslist");
        echo "\">List Products</a>
                    </li>
                  </ul>
                </li>
                
              </ul>
            </div>
            <div class=\"menu_section\">
              <h3>Live On</h3>
              <ul class=\"nav side-menu\">
                <li><a><i class=\"fa fa-bug\"></i> Additional Pages <span class=\"fa fa-chevron-down\"></span></a>
                  <ul class=\"nav child_menu\" style=\"display: none\">
                    <li><a href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("e-commerce");
        echo "\">E-commerce</a>
                    </li>
                    
                    
                    <li><a href=\"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("utilisateur");
        echo "\">Users</a>
                    </li>
                   
                  </ul>
                </li>
                
                </ul>
                  
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class=\"sidebar-footer hidden-small\">
            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
              <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
            </a>
            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
              <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
            </a>
            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
              <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
            </a>
            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\">
              <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class=\"top_nav\">

        <div class=\"nav_menu\">
          <nav class=\"\" role=\"navigation\">
            <div class=\"nav toggle\">
              <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
            </div>

            <ul class=\"nav navbar-nav navbar-right\">
              <li class=\"\">
                <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                  <img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/images/img.jpg"), "html", null, true);
        echo "\" alt=\"\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                  <span class=\" fa fa-angle-down\"></span>
                </a>
                <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                  <li><a href=\"";
        // line 155
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">  Profile</a>
                  </li>
                  
                 
                  <li><a href=\"";
        // line 159
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a>
                  </li>
                </ul>
              </li>

             

            </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->


      <!-- page content -->
     <div class=\"right_col\" role=\"main\">
        <div class=\"\">
          <div class=\"page-title\">
            <div class=\"title_left\">
              <h3>
                    Chart Js
                    <small>
                        Some examples to get you started
                    </small>
                </h3>
            </div>

            <div class=\"title_right\">
              <div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">
                <div class=\"input-group\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\">
                  <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\">Go!</button>
                        </span>
                </div>
              </div>
            </div>
              
              
              
              
            
              
              
              
              
              
              
              
          </div>
          <div class=\"clearfix\"></div>

          <div class=\"row\">


            <div class=\"col-md-6 col-sm-6 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Line graph<small>Sessions</small></h2>
                  <ul class=\"nav navbar-right panel_toolbox\">
                    <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                    </li>
                    <li class=\"dropdown\">
                      <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                      <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=\"#\">Settings 1</a>
                        </li>
                        <li><a href=\"#\">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                    </li>
                  </ul>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                  <canvas id=\"lineChart\"></canvas>
                </div>
              </div>
            </div>

            <div class=\"col-md-6 col-sm-6 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Bar graph <small>Visitors</small></h2>
                  <ul class=\"nav navbar-right panel_toolbox\">
                    <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                    </li>
                    <li class=\"dropdown\">
                      <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                      <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=\"#\">Settings 1</a>
                        </li>
                        <li><a href=\"#\">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                    </li>
                  </ul>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                  <canvas id=\"mybarChart\"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class=\"clearfix\"></div>
          <div class=\"row\">
            

            <div class=\"col-md-6 col-sm-6 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Donut Graph <small>DataBase</small></h2>
                  <ul class=\"nav navbar-right panel_toolbox\">
                    <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                    </li>
                    <li class=\"dropdown\">
                      <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                      <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=\"#\">Settings 1</a>
                        </li>
                        <li><a href=\"#\">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                    </li>
                  </ul>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                  <canvas id=\"canvasDoughnut\"></canvas>
                </div>
              </div>
            </div>
              <div class=\"col-md-6 col-sm-6 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Pie Graph Chart <small>Users</small></h2>
                  <ul class=\"nav navbar-right panel_toolbox\">
                    <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                    </li>
                    <li class=\"dropdown\">
                      <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                      <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=\"#\">Settings 1</a>
                        </li>
                        <li><a href=\"#\">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                    </li>
                  </ul>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                  <canvas id=\"pieChart\"></canvas>
                </div>
              </div>
            </div>
              
              
          </div>
          
        </div>
     </div>
      <!-- /page content -->

      <!-- footer content -->
      <footer>
        <div class=\"pull-right\">
          Gentelella - Bootstrap Admin Template by <a href=\"https://colorlib.com\">Colorlib</a>
        </div>
        <div class=\"clearfix\"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>

  <div id=\"custom_notifications\" class=\"custom-notifications dsp_none\">
    <ul class=\"list-unstyled notifications clearfix\" data-tabbed_notifications=\"notif-group\">
    </ul>
    <div class=\"clearfix\"></div>
    <div id=\"notif-group\" class=\"tabbed_notifications\"></div>
  </div>

   <script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/icheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/custom.js"), "html", null, true);
        echo "\"></script>

  <!-- echart -->
    <script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/pace/pace.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/chartjs/chart.min.js"), "html", null, true);
        echo "\"></script>

  <script>
    Chart.defaults.global.legend = {
      enabled: false
    };

    // Line chart
    var ctx1 = document.getElementById(\"lineChart\");
    var lineChart = new Chart(ctx1, {
      type: 'line',
      data: {
        labels: [\"January\", \"February\", \"March\", \"April\", \"May\", \"June\", \"July\"],
        datasets: [{
          label: \"My First dataset\",
          backgroundColor: \"rgba(38, 185, 154, 0.31)\",
          borderColor: \"rgba(38, 185, 154, 0.7)\",
          pointBorderColor: \"rgba(38, 185, 154, 0.7)\",
          pointBackgroundColor: \"rgba(38, 185, 154, 0.7)\",
          pointHoverBackgroundColor: \"#fff\",
          pointHoverBorderColor: \"rgba(220,220,220,1)\",
          pointBorderWidth: 1,
          data: [31, 74, 6, 39, 20, 85, 7]
        }, {
          label: \"My Second dataset\",
          backgroundColor: \"rgba(3, 88, 106, 0.3)\",
          borderColor: \"rgba(3, 88, 106, 0.70)\",
          pointBorderColor: \"rgba(3, 88, 106, 0.70)\",
          pointBackgroundColor: \"rgba(3, 88, 106, 0.70)\",
          pointHoverBackgroundColor: \"#fff\",
          pointHoverBorderColor: \"rgba(151,187,205,1)\",
          pointBorderWidth: 1,
          data: [82, 23, 66, 9, 99, 4, 2]
        }]
      },
    });

    // Bar chart
    var ctx2 = document.getElementById(\"mybarChart\");
    var mybarChart = new Chart(ctx2, {
      type: 'bar',
      data: {
        labels: [\"January\", \"February\", \"March\", \"April\", \"May\", \"June\", \"July\"],
        datasets: [{
          label: '# Clients',
          backgroundColor: \"#26B99A\",
          data: [51, 30, 40, 28, 92, 50, 45]
        }, {
          label: '# Vendors',
          backgroundColor: \"#03586A\",
          data: [41, 56, 25, 48, 72, 34, 12]
        }]
      },

      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });

    // Doughnut chart
    var ctx3 = document.getElementById(\"canvasDoughnut\");
    var data1 = {
      labels: [
        \"Commands\",
        \"Shops\",
       
        \"Products\",
        \"Carts\"
      ],
      
      datasets: [{
        data: [";
        // line 436
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commands"]) ? $context["commands"] : $this->getContext($context, "commands")));
        foreach ($context['_seq'] as $context["_key"] => $context["comm"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["comm"], "a", array()), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ",";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["boutiques"]) ? $context["boutiques"] : $this->getContext($context, "boutiques")));
        foreach ($context['_seq'] as $context["_key"] => $context["bout"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["bout"], "a", array()), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ",";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "a", array()), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ",";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["baskets"]) ? $context["baskets"] : $this->getContext($context, "baskets")));
        foreach ($context['_seq'] as $context["_key"] => $context["pan"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["pan"], "a", array()), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
        backgroundColor: [
          \"#455C73\",
          \"#9B59B6\",
          
          \"#26B99A\",
          \"#3498DB\"
        ],
        hoverBackgroundColor: [
          \"#34495E\",
          \"#B370CF\",
         
          \"#36CAAB\",
          \"#49A9EA\"
        ]

      }]
    };

    var canvasDoughnut = new Chart(ctx3, {
      type: 'doughnut',
      tooltipFillColor: \"rgba(51, 51, 51, 0.55)\",
      data: data1
    });

    // Radar chart
    

    // Pie chart
    var ctx4 = document.getElementById(\"pieChart\");
    var data2 = {
      datasets: [{
        data: [";
        // line 468
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vendors"]) ? $context["vendors"] : $this->getContext($context, "vendors")));
        foreach ($context['_seq'] as $context["_key"] => $context["ven"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["ven"], "a", array()), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ven'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ", ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["cli"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["cli"], "a", array()), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cli'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
        backgroundColor: [
          \"#455C73\",
          \"#9B59B6\"
          
        ],
        label: 'My dataset' // for legend
      }],
      labels: [
        \"Vendors\",
        \"Clients\"
        
      ]
    };

    var pieChart = new Chart(ctx4, {
      data: data2,
      type: 'pie',
      otpions: {
        legend: false
      }
    });

    // PolarArea chart
   
  </script>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "TmallAdminBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  599 => 468,  530 => 436,  450 => 359,  446 => 358,  442 => 357,  436 => 354,  432 => 353,  428 => 352,  424 => 351,  229 => 159,  222 => 155,  213 => 151,  166 => 107,  159 => 103,  144 => 91,  133 => 83,  120 => 73,  102 => 58,  95 => 54,  85 => 47,  63 => 28,  57 => 25,  51 => 22,  44 => 18,  40 => 17,  35 => 15,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/*   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*   <!-- Meta, title, CSS, favicons, etc. -->*/
/*   <meta charset="utf-8">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*   <title>Tunisia Mall | </title>*/
/* */
/*   <!-- Bootstrap core CSS -->*/
/* */
/*   <link href="{{ asset('adminSheet/css/bootstrap.min.css')}}" rel="stylesheet">*/
/* */
/*   <link href="{{ asset('adminSheet/fonts/css/font-awesome.min.css')}}" rel="stylesheet">*/
/*   <link href="{{ asset('adminSheet/css/animate.min.css')}}" rel="stylesheet">*/
/* */
/*   <!-- Custom styling plus plugins -->*/
/*   */
/*   <link href="{{ asset('adminSheet/css/custom.css')}}" rel="stylesheet">*/
/*    */
/*    */
/*   <link href="{{ asset('adminSheet/css/icheck/flat/green.css')}}" rel="stylesheet" />*/
/*   */
/*      */
/*   <script src="{{ asset('adminSheet/js/jquery.min.js')}}"></script>*/
/*  */
/* */
/*   */
/* */
/* </head>*/
/* */
/* */
/* <body class="nav-md">*/
/* */
/*   <div class="container body">*/
/* */
/* */
/*     <div class="main_container">*/
/* */
/*       <div class="col-md-3 left_col">*/
/*         <div class="left_col scroll-view">*/
/* */
/*           <div class="navbar nav_title" style="border: 0;">*/
/*             <a href="{{path('tmall_admin_homepage')}}" class="site_title"><i class="fa fa-paw"></i> <span>Tunisia Mall!</span></a>*/
/*           </div>*/
/*           <div class="clearfix"></div>*/
/* */
/*           <!-- menu prile quick info -->*/
/*           <div class="profile">*/
/*             <div class="profile_pic">*/
/*               <img src="{{ asset('adminSheet/images/img.jpg')}}" alt="..." class="img-circle profile_img">*/
/*             </div>*/
/*             <div class="profile_info">*/
/*               <span>Welcome,</span>*/
/*               <h2>{{ app.user.username }}</h2>*/
/*             </div>*/
/*           </div>*/
/*           <!-- /menu prile quick info -->*/
/* */
/*           <br />*/
/* */
/*           <!-- sidebar menu -->*/
/*           <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">*/
/* */
/*             <div class="menu_section">*/
/*               <h3>General</h3>*/
/*               <ul class="nav side-menu">*/
/*                 <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>*/
/*                   <ul class="nav child_menu" style="display: none">*/
/*                     <li><a href="{{path('tmall_admin_homepage')}}">Dashboard</a>*/
/*                     </li>*/
/*                     */
/*                     */
/*                   </ul>*/
/*                 </li>*/
/*                 */
/*                 <li><a><i class="fa fa-desktop"></i> Stores <span class="fa fa-chevron-down"></span></a>*/
/*                   <ul class="nav child_menu" style="display: none">*/
/*                     */
/*                     <li><a href="{{path('boutiqueslist')}}">List Boutiques</a>*/
/*                     </li>*/
/*                     */
/*                   </ul>*/
/*                 </li>*/
/*                 <li><a><i class="fa fa-table"></i> Products <span class="fa fa-chevron-down"></span></a>*/
/*                   <ul class="nav child_menu" style="display: none">*/
/*                     */
/*                     <li><a href="{{path('productslist')}}">List Products</a>*/
/*                     </li>*/
/*                   </ul>*/
/*                 </li>*/
/*                 */
/*               </ul>*/
/*             </div>*/
/*             <div class="menu_section">*/
/*               <h3>Live On</h3>*/
/*               <ul class="nav side-menu">*/
/*                 <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>*/
/*                   <ul class="nav child_menu" style="display: none">*/
/*                     <li><a href="{{path('e-commerce')}}">E-commerce</a>*/
/*                     </li>*/
/*                     */
/*                     */
/*                     <li><a href="{{path('utilisateur')}}">Users</a>*/
/*                     </li>*/
/*                    */
/*                   </ul>*/
/*                 </li>*/
/*                 */
/*                 </ul>*/
/*                   */
/*             </div>*/
/* */
/*           </div>*/
/*           <!-- /sidebar menu -->*/
/* */
/*           <!-- /menu footer buttons -->*/
/*           <div class="sidebar-footer hidden-small">*/
/*             <a data-toggle="tooltip" data-placement="top" title="Settings">*/
/*               <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>*/
/*             </a>*/
/*             <a data-toggle="tooltip" data-placement="top" title="FullScreen">*/
/*               <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>*/
/*             </a>*/
/*             <a data-toggle="tooltip" data-placement="top" title="Lock">*/
/*               <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>*/
/*             </a>*/
/*             <a data-toggle="tooltip" data-placement="top" title="Logout">*/
/*               <span class="glyphicon glyphicon-off" aria-hidden="true"></span>*/
/*             </a>*/
/*           </div>*/
/*           <!-- /menu footer buttons -->*/
/*         </div>*/
/*       </div>*/
/* */
/*       <!-- top navigation -->*/
/*       <div class="top_nav">*/
/* */
/*         <div class="nav_menu">*/
/*           <nav class="" role="navigation">*/
/*             <div class="nav toggle">*/
/*               <a id="menu_toggle"><i class="fa fa-bars"></i></a>*/
/*             </div>*/
/* */
/*             <ul class="nav navbar-nav navbar-right">*/
/*               <li class="">*/
/*                 <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">*/
/*                   <img src="{{ asset('adminSheet/images/img.jpg')}}" alt="">{{ app.user.username }}*/
/*                   <span class=" fa fa-angle-down"></span>*/
/*                 </a>*/
/*                 <ul class="dropdown-menu dropdown-usermenu pull-right">*/
/*                   <li><a href="{{ path('fos_user_profile_show') }}">  Profile</a>*/
/*                   </li>*/
/*                   */
/*                  */
/*                   <li><a href="{{ path('fos_user_security_logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>*/
/*                   </li>*/
/*                 </ul>*/
/*               </li>*/
/* */
/*              */
/* */
/*             </ul>*/
/*           </nav>*/
/*         </div>*/
/* */
/*       </div>*/
/*       <!-- /top navigation -->*/
/* */
/* */
/*       <!-- page content -->*/
/*      <div class="right_col" role="main">*/
/*         <div class="">*/
/*           <div class="page-title">*/
/*             <div class="title_left">*/
/*               <h3>*/
/*                     Chart Js*/
/*                     <small>*/
/*                         Some examples to get you started*/
/*                     </small>*/
/*                 </h3>*/
/*             </div>*/
/* */
/*             <div class="title_right">*/
/*               <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">*/
/*                 <div class="input-group">*/
/*                   <input type="text" class="form-control" placeholder="Search for...">*/
/*                   <span class="input-group-btn">*/
/*                             <button class="btn btn-default" type="button">Go!</button>*/
/*                         </span>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*               */
/*               */
/*               */
/*               */
/*             */
/*               */
/*               */
/*               */
/*               */
/*               */
/*               */
/*               */
/*           </div>*/
/*           <div class="clearfix"></div>*/
/* */
/*           <div class="row">*/
/* */
/* */
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*               <div class="x_panel">*/
/*                 <div class="x_title">*/
/*                   <h2>Line graph<small>Sessions</small></h2>*/
/*                   <ul class="nav navbar-right panel_toolbox">*/
/*                     <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>*/
/*                     </li>*/
/*                     <li class="dropdown">*/
/*                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>*/
/*                       <ul class="dropdown-menu" role="menu">*/
/*                         <li><a href="#">Settings 1</a>*/
/*                         </li>*/
/*                         <li><a href="#">Settings 2</a>*/
/*                         </li>*/
/*                       </ul>*/
/*                     </li>*/
/*                     <li><a class="close-link"><i class="fa fa-close"></i></a>*/
/*                     </li>*/
/*                   </ul>*/
/*                   <div class="clearfix"></div>*/
/*                 </div>*/
/*                 <div class="x_content">*/
/*                   <canvas id="lineChart"></canvas>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/* */
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*               <div class="x_panel">*/
/*                 <div class="x_title">*/
/*                   <h2>Bar graph <small>Visitors</small></h2>*/
/*                   <ul class="nav navbar-right panel_toolbox">*/
/*                     <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>*/
/*                     </li>*/
/*                     <li class="dropdown">*/
/*                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>*/
/*                       <ul class="dropdown-menu" role="menu">*/
/*                         <li><a href="#">Settings 1</a>*/
/*                         </li>*/
/*                         <li><a href="#">Settings 2</a>*/
/*                         </li>*/
/*                       </ul>*/
/*                     </li>*/
/*                     <li><a class="close-link"><i class="fa fa-close"></i></a>*/
/*                     </li>*/
/*                   </ul>*/
/*                   <div class="clearfix"></div>*/
/*                 </div>*/
/*                 <div class="x_content">*/
/*                   <canvas id="mybarChart"></canvas>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*           <div class="clearfix"></div>*/
/*           <div class="row">*/
/*             */
/* */
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*               <div class="x_panel">*/
/*                 <div class="x_title">*/
/*                   <h2>Donut Graph <small>DataBase</small></h2>*/
/*                   <ul class="nav navbar-right panel_toolbox">*/
/*                     <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>*/
/*                     </li>*/
/*                     <li class="dropdown">*/
/*                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>*/
/*                       <ul class="dropdown-menu" role="menu">*/
/*                         <li><a href="#">Settings 1</a>*/
/*                         </li>*/
/*                         <li><a href="#">Settings 2</a>*/
/*                         </li>*/
/*                       </ul>*/
/*                     </li>*/
/*                     <li><a class="close-link"><i class="fa fa-close"></i></a>*/
/*                     </li>*/
/*                   </ul>*/
/*                   <div class="clearfix"></div>*/
/*                 </div>*/
/*                 <div class="x_content">*/
/*                   <canvas id="canvasDoughnut"></canvas>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*               <div class="col-md-6 col-sm-6 col-xs-12">*/
/*               <div class="x_panel">*/
/*                 <div class="x_title">*/
/*                   <h2>Pie Graph Chart <small>Users</small></h2>*/
/*                   <ul class="nav navbar-right panel_toolbox">*/
/*                     <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>*/
/*                     </li>*/
/*                     <li class="dropdown">*/
/*                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>*/
/*                       <ul class="dropdown-menu" role="menu">*/
/*                         <li><a href="#">Settings 1</a>*/
/*                         </li>*/
/*                         <li><a href="#">Settings 2</a>*/
/*                         </li>*/
/*                       </ul>*/
/*                     </li>*/
/*                     <li><a class="close-link"><i class="fa fa-close"></i></a>*/
/*                     </li>*/
/*                   </ul>*/
/*                   <div class="clearfix"></div>*/
/*                 </div>*/
/*                 <div class="x_content">*/
/*                   <canvas id="pieChart"></canvas>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*               */
/*               */
/*           </div>*/
/*           */
/*         </div>*/
/*      </div>*/
/*       <!-- /page content -->*/
/* */
/*       <!-- footer content -->*/
/*       <footer>*/
/*         <div class="pull-right">*/
/*           Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>*/
/*         </div>*/
/*         <div class="clearfix"></div>*/
/*       </footer>*/
/*       <!-- /footer content -->*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div id="custom_notifications" class="custom-notifications dsp_none">*/
/*     <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">*/
/*     </ul>*/
/*     <div class="clearfix"></div>*/
/*     <div id="notif-group" class="tabbed_notifications"></div>*/
/*   </div>*/
/* */
/*    <script src="{{ asset('adminSheet/js/bootstrap.min.js')}}"></script>*/
/*   <script src="{{ asset('adminSheet/js/progressbar/bootstrap-progressbar.min.js')}}"></script>*/
/*   <script src="{{ asset('adminSheet/js/icheck/icheck.min.js')}}"></script>*/
/*   <script src="{{ asset('adminSheet/js/custom.js')}}"></script>*/
/* */
/*   <!-- echart -->*/
/*     <script src="{{ asset('adminSheet/js/pace/pace.min.js')}}"></script>*/
/*   <script src="{{ asset('adminSheet/js/moment/moment.min.js')}}"></script>*/
/*   <script src="{{ asset('adminSheet/js/chartjs/chart.min.js')}}"></script>*/
/* */
/*   <script>*/
/*     Chart.defaults.global.legend = {*/
/*       enabled: false*/
/*     };*/
/* */
/*     // Line chart*/
/*     var ctx1 = document.getElementById("lineChart");*/
/*     var lineChart = new Chart(ctx1, {*/
/*       type: 'line',*/
/*       data: {*/
/*         labels: ["January", "February", "March", "April", "May", "June", "July"],*/
/*         datasets: [{*/
/*           label: "My First dataset",*/
/*           backgroundColor: "rgba(38, 185, 154, 0.31)",*/
/*           borderColor: "rgba(38, 185, 154, 0.7)",*/
/*           pointBorderColor: "rgba(38, 185, 154, 0.7)",*/
/*           pointBackgroundColor: "rgba(38, 185, 154, 0.7)",*/
/*           pointHoverBackgroundColor: "#fff",*/
/*           pointHoverBorderColor: "rgba(220,220,220,1)",*/
/*           pointBorderWidth: 1,*/
/*           data: [31, 74, 6, 39, 20, 85, 7]*/
/*         }, {*/
/*           label: "My Second dataset",*/
/*           backgroundColor: "rgba(3, 88, 106, 0.3)",*/
/*           borderColor: "rgba(3, 88, 106, 0.70)",*/
/*           pointBorderColor: "rgba(3, 88, 106, 0.70)",*/
/*           pointBackgroundColor: "rgba(3, 88, 106, 0.70)",*/
/*           pointHoverBackgroundColor: "#fff",*/
/*           pointHoverBorderColor: "rgba(151,187,205,1)",*/
/*           pointBorderWidth: 1,*/
/*           data: [82, 23, 66, 9, 99, 4, 2]*/
/*         }]*/
/*       },*/
/*     });*/
/* */
/*     // Bar chart*/
/*     var ctx2 = document.getElementById("mybarChart");*/
/*     var mybarChart = new Chart(ctx2, {*/
/*       type: 'bar',*/
/*       data: {*/
/*         labels: ["January", "February", "March", "April", "May", "June", "July"],*/
/*         datasets: [{*/
/*           label: '# Clients',*/
/*           backgroundColor: "#26B99A",*/
/*           data: [51, 30, 40, 28, 92, 50, 45]*/
/*         }, {*/
/*           label: '# Vendors',*/
/*           backgroundColor: "#03586A",*/
/*           data: [41, 56, 25, 48, 72, 34, 12]*/
/*         }]*/
/*       },*/
/* */
/*       options: {*/
/*         scales: {*/
/*           yAxes: [{*/
/*             ticks: {*/
/*               beginAtZero: true*/
/*             }*/
/*           }]*/
/*         }*/
/*       }*/
/*     });*/
/* */
/*     // Doughnut chart*/
/*     var ctx3 = document.getElementById("canvasDoughnut");*/
/*     var data1 = {*/
/*       labels: [*/
/*         "Commands",*/
/*         "Shops",*/
/*        */
/*         "Products",*/
/*         "Carts"*/
/*       ],*/
/*       */
/*       datasets: [{*/
/*         data: [{% for comm in commands%}{{comm.a}}{% endfor %},{% for bout in boutiques%}{{bout.a}}{% endfor %},{% for prod in products%}{{prod.a}}{% endfor %},{% for pan in baskets%}{{pan.a}}{%endfor%}],*/
/*         backgroundColor: [*/
/*           "#455C73",*/
/*           "#9B59B6",*/
/*           */
/*           "#26B99A",*/
/*           "#3498DB"*/
/*         ],*/
/*         hoverBackgroundColor: [*/
/*           "#34495E",*/
/*           "#B370CF",*/
/*          */
/*           "#36CAAB",*/
/*           "#49A9EA"*/
/*         ]*/
/* */
/*       }]*/
/*     };*/
/* */
/*     var canvasDoughnut = new Chart(ctx3, {*/
/*       type: 'doughnut',*/
/*       tooltipFillColor: "rgba(51, 51, 51, 0.55)",*/
/*       data: data1*/
/*     });*/
/* */
/*     // Radar chart*/
/*     */
/* */
/*     // Pie chart*/
/*     var ctx4 = document.getElementById("pieChart");*/
/*     var data2 = {*/
/*       datasets: [{*/
/*         data: [{%for ven in vendors%}{{ven.a}}{%endfor%}, {%for cli in clients%}{{cli.a}}{%endfor%}],*/
/*         backgroundColor: [*/
/*           "#455C73",*/
/*           "#9B59B6"*/
/*           */
/*         ],*/
/*         label: 'My dataset' // for legend*/
/*       }],*/
/*       labels: [*/
/*         "Vendors",*/
/*         "Clients"*/
/*         */
/*       ]*/
/*     };*/
/* */
/*     var pieChart = new Chart(ctx4, {*/
/*       data: data2,*/
/*       type: 'pie',*/
/*       otpions: {*/
/*         legend: false*/
/*       }*/
/*     });*/
/* */
/*     // PolarArea chart*/
/*    */
/*   </script>*/
/* </body>*/
/* */
/* </html>*/
/* */
