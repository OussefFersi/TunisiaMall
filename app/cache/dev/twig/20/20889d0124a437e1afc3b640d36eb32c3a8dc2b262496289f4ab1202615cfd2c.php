<?php

/* TmallAdminBundle::admin_template_layout.html.twig */
class __TwigTemplate_9dc0c316af205d917553b6b213cd09de0bb75d80f640db27984869206bd38953 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
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
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/css/maps/jquery-jvectormap-2.0.3.css"), "html", null, true);
        echo "\" />
  <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/css/icheck/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/css/floatexamples.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  ";
        // line 25
        $this->displayBlock('head', $context, $blocks);
        // line 26
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/nprogress.js"), "html", null, true);
        echo "\"></script>

  <!--[if lt IE 9]>
        <script src=\"adminSheet/../assets/js/ie8-responsive-file-warning.js\"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
          <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->

</head>


<body class=\"nav-md\">

  <div class=\"container body\">


    <div class=\"main_container\">

      <div class=\"col-md-3 left_col\">
        <div class=\"left_col scroll-view\">

          <div class=\"navbar nav_title\" style=\"border: 0;\">
            <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("tmall_admin_homepage");
        echo "\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>Tunisia Mall!</span></a>
          </div>
          <div class=\"clearfix\"></div>

          <!-- menu prile quick info -->
          <div class=\"profile\">
            <div class=\"profile_pic\">
              <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/images/img.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-circle profile_img\">
            </div>
            <div class=\"profile_info\">
              <span>Welcome,</span>
              <h2>";
        // line 64
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
        // line 79
        echo $this->env->getExtension('routing')->getPath("tmall_admin_homepage");
        echo "\">Dashboard</a>
                    </li>
                    
                    
                  </ul>
                </li>
               
                <li><a><i class=\"fa fa-desktop\"></i> Stores <span class=\"fa fa-chevron-down\"></span></a>
                  <ul class=\"nav child_menu\" style=\"display: none\">
                    
                    <li><a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("boutiqueslist");
        echo "\">List Boutiques</a>
                    </li>
                    
                  </ul>
                </li>
                <li><a><i class=\"fa fa-table\"></i> Products <span class=\"fa fa-chevron-down\"></span></a>
                  <ul class=\"nav child_menu\" style=\"display: none\">
                    
                    <li><a href=\"";
        // line 97
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
        // line 109
        echo $this->env->getExtension('routing')->getPath("e-commerce");
        echo "\">E-commerce</a>
                    </li>
                    
                    
                    <li><a href=\"";
        // line 113
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
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/images/img.jpg"), "html", null, true);
        echo "\" alt=\"\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                  <span class=\" fa fa-angle-down\"></span>
                </a>
                <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                  <li><a href=\"";
        // line 161
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">  Profile</a>
                  </li>
                  
                  
                  <li><a href=\"";
        // line 165
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
       
     ";
        // line 182
        $this->displayBlock('content', $context, $blocks);
        echo " 
     
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
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

  <!-- gauge js -->
  <script type=\"text/javascript\" src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/gauge/gauge.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/gauge/gauge_demo.js"), "html", null, true);
        echo "\"></script>
  <!-- bootstrap progress js -->
  <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
  <!-- icheck -->
  <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/icheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
  <!-- daterangepicker -->
  <script type=\"text/javascript\" src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/datepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
  <!-- chart js -->
  <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/chartjs/chart.min.js"), "html", null, true);
        echo "\"></script>

  <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/custom.js"), "html", null, true);
        echo "\"></script>

  <!-- flot js -->
  <!--[if lte IE 8]><script type=\"text/javascript\" src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/excanvas.min.js"), "html", null, true);
        echo "\"></script><![endif]-->
  <script type=\"text/javascript\" src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/flot/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/flot/jquery.flot.time.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/flot/date.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/flot/jquery.flot.spline.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/flot/curvedLines.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
  <script>
    \$(document).ready(function() {
      // [17, 74, 6, 39, 20, 85, 7]
      //[82, 23, 66, 9, 99, 6, 2]
      var data1 = [
        [gd(2012, 1, 1), 17],
        [gd(2012, 1, 2), 74],
        [gd(2012, 1, 3), 6],
        [gd(2012, 1, 4), 39],
        [gd(2012, 1, 5), 20],
        [gd(2012, 1, 6), 85],
        [gd(2012, 1, 7), 7]
      ];

      var data2 = [
        [gd(2012, 1, 1), 82],
        [gd(2012, 1, 2), 23],
        [gd(2012, 1, 3), 66],
        [gd(2012, 1, 4), 9],
        [gd(2012, 1, 5), 119],
        [gd(2012, 1, 6), 6],
        [gd(2012, 1, 7), 9]
      ];
      \$(\"#canvas_dahs\").length && \$.plot(\$(\"#canvas_dahs\"), [
        data1, data2
      ], {
        series: {
          lines: {
            show: false,
            fill: true
          },
          splines: {
            show: true,
            tension: 0.4,
            lineWidth: 1,
            fill: 0.4
          },
          points: {
            radius: 0,
            show: true
          },
          shadowSize: 2
        },
        grid: {
          verticalLines: true,
          hoverable: true,
          clickable: true,
          tickColor: \"#d5d5d5\",
          borderWidth: 1,
          color: '#fff'
        },
        colors: [\"rgba(38, 185, 154, 0.38)\", \"rgba(3, 88, 106, 0.38)\"],
        xaxis: {
          tickColor: \"rgba(51, 51, 51, 0.06)\",
          mode: \"time\",
          tickSize: [1, \"day\"],
          //tickLength: 10,
          axisLabel: \"Date\",
          axisLabelUseCanvas: true,
          axisLabelFontSizePixels: 12,
          axisLabelFontFamily: 'Verdana, Arial',
          axisLabelPadding: 10
            //mode: \"time\", timeformat: \"%m/%d/%y\", minTickSize: [1, \"day\"]
        },
        yaxis: {
          ticks: 8,
          tickColor: \"rgba(51, 51, 51, 0.06)\",
        },
        tooltip: false
      });

      function gd(year, month, day) {
        return new Date(year, month - 1, day).getTime();
      }
    });
  </script>

  <!-- worldmap -->
  <script type=\"text/javascript\" src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/maps/jquery-jvectormap-2.0.3.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/maps/gdp-data.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/maps/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/maps/jquery-jvectormap-us-aea-en.js"), "html", null, true);
        echo "\"></script>
  <!-- pace -->
  <script src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/pace/pace.min.js"), "html", null, true);
        echo "\"></script>
  <script>
    \$(function() {
      \$('#world-map-gdp').vectorMap({
        map: 'world_mill_en',
        backgroundColor: 'transparent',
        zoomOnScroll: false,
        series: {
          regions: [{
            values: gdpData,
            scale: ['#E6F2F0', '#149B7E'],
            normalizeFunction: 'polynomial'
          }]
        },
        onRegionTipShow: function(e, el, code) {
          el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
        }
      });
    });
  </script>
  <!-- skycons -->
  <script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/skycons/skycons.min.js"), "html", null, true);
        echo "\"></script>
  <script>
    var icons = new Skycons({
        \"color\": \"#73879C\"
      }),
      list = [
        \"clear-day\", \"clear-night\", \"partly-cloudy-day\",
        \"partly-cloudy-night\", \"cloudy\", \"rain\", \"sleet\", \"snow\", \"wind\",
        \"fog\"
      ],
      i;

    for (i = list.length; i--;)
      icons.set(list[i], list[i]);

    icons.play();
  </script>

  <!-- Doughnut Chart -->
  <script>
    \$('document').ready(function() {
      var options = {
        legend: false,
        responsive: false
      };

      new Chart(document.getElementById(\"canvas1\"), {
        type: 'doughnut',
        tooltipFillColor: \"rgba(51, 51, 51, 0.55)\",
        data: {
          labels: [
            \"Symbian\",
            \"Blackberry\",
            \"Other\",
            \"Android\",
            \"IOS\"
          ],
          datasets: [{
            data: [15, 20, 30, 10, 30],
            backgroundColor: [
              \"#BDC3C7\",
              \"#9B59B6\",
              \"#E74C3C\",
              \"#26B99A\",
              \"#3498DB\"
            ],
            hoverBackgroundColor: [
              \"#CFD4D8\",
              \"#B370CF\",
              \"#E95E4F\",
              \"#36CAAB\",
              \"#49A9EA\"
            ]
          }]
        },
        options: options
      });
    });
  </script>
  <!-- /Doughnut Chart -->
  
  <!-- datepicker -->
  <script type=\"text/javascript\">
    \$(document).ready(function() {

      var cb = function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        \$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        //alert(\"Callback has fired: [\" + start.format('MMMM D, YYYY') + \" to \" + end.format('MMMM D, YYYY') + \", label = \" + label + \"]\");
      }

      var optionSet1 = {
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2012',
        maxDate: '12/31/2015',
        dateLimit: {
          days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        buttonClasses: ['btn btn-default'],
        applyClass: 'btn-small btn-primary',
        cancelClass: 'btn-small',
        format: 'MM/DD/YYYY',
        separator: ' to ',
        locale: {
          applyLabel: 'Submit',
          cancelLabel: 'Clear',
          fromLabel: 'From',
          toLabel: 'To',
          customRangeLabel: 'Custom',
          daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
          monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
          firstDay: 1
        }
      };
      \$('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
      \$('#reportrange').daterangepicker(optionSet1, cb);
      \$('#reportrange').on('show.daterangepicker', function() {
        console.log(\"show event fired\");
      });
      \$('#reportrange').on('hide.daterangepicker', function() {
        console.log(\"hide event fired\");
      });
      \$('#reportrange').on('apply.daterangepicker', function(ev, picker) {
        console.log(\"apply event fired, start/end dates are \" + picker.startDate.format('MMMM D, YYYY') + \" to \" + picker.endDate.format('MMMM D, YYYY'));
      });
      \$('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
        console.log(\"cancel event fired\");
      });
      \$('#options1').click(function() {
        \$('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
      });
      \$('#options2').click(function() {
        \$('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
      });
      \$('#destroy').click(function() {
        \$('#reportrange').data('daterangepicker').remove();
      });
    });
  </script>
  <script>
    NProgress.done();
  </script>
  
";
        // line 474
        $this->displayBlock('script', $context, $blocks);
        // line 475
        echo "  <!-- /datepicker -->
  <!-- /footer content -->
</body>

</html>
";
    }

    // line 25
    public function block_head($context, array $blocks = array())
    {
    }

    // line 182
    public function block_content($context, array $blocks = array())
    {
    }

    // line 474
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TmallAdminBundle::admin_template_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  660 => 474,  655 => 182,  650 => 25,  641 => 475,  639 => 474,  498 => 336,  474 => 315,  469 => 313,  465 => 312,  461 => 311,  457 => 310,  375 => 231,  371 => 230,  367 => 229,  363 => 228,  359 => 227,  355 => 226,  351 => 225,  347 => 224,  343 => 223,  339 => 222,  333 => 219,  328 => 217,  323 => 215,  319 => 214,  314 => 212,  309 => 210,  304 => 208,  300 => 207,  294 => 204,  269 => 182,  249 => 165,  242 => 161,  233 => 157,  186 => 113,  179 => 109,  164 => 97,  153 => 89,  140 => 79,  122 => 64,  115 => 60,  105 => 53,  76 => 27,  71 => 26,  69 => 25,  65 => 24,  61 => 23,  57 => 22,  53 => 21,  47 => 18,  43 => 17,  38 => 15,  22 => 1,);
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
/*   */
/*   <link href="{{ asset('adminSheet/fonts/css/font-awesome.min.css')}}" rel="stylesheet">*/
/*   <link href="{{ asset('adminSheet/css/animate.min.css')}}" rel="stylesheet">*/
/* */
/*   <!-- Custom styling plus plugins -->*/
/*   <link href="{{ asset('adminSheet/css/custom.css')}}" rel="stylesheet">*/
/*   <link rel="stylesheet" type="text/css" href="{{ asset('adminSheet/css/maps/jquery-jvectormap-2.0.3.css')}}" />*/
/*   <link href="{{ asset('adminSheet/css/icheck/flat/green.css')}}" rel="stylesheet" />*/
/*   <link href="{{ asset('adminSheet/css/floatexamples.css')}}" rel="stylesheet" type="text/css" />*/
/*   {% block head %}{% endblock %}*/
/*   <script src="{{ asset('adminSheet/js/jquery.min.js')}}"></script>*/
/*   <script src="{{ asset('adminSheet/js/nprogress.js')}}"></script>*/
/* */
/*   <!--[if lt IE 9]>*/
/*         <script src="adminSheet/../assets/js/ie8-responsive-file-warning.js"></script>*/
/*         <![endif]-->*/
/* */
/*   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*   <!--[if lt IE 9]>*/
/*           <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*           <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
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
/*                */
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
/*                   */
/*                   <li><a href="{{ path('fos_user_security_logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>*/
/*                   </li>*/
/*                 </ul>*/
/*               </li>*/
/* */
/*             */
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
/*        */
/*      {% block content %}{% endblock %} */
/*      */
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
/*   <script src="{{ asset('adminSheet/js/bootstrap.min.js')}}"></script>*/
/* */
/*   <!-- gauge js -->*/
/*   <script type="text/javascript" src="{{ asset('adminSheet/js/gauge/gauge.min.js')}}"></script>*/
/*   <script type="text/javascript" src="{{ asset('adminSheet/js/gauge/gauge_demo.js')}}"></script>*/
/*   <!-- bootstrap progress js -->*/
/*   <script src="{{ asset('adminSheet/js/progressbar/bootstrap-progressbar.min.js')}}"></script>*/
/*   <!-- icheck -->*/
/*   <script src="{{ asset('adminSheet/js/icheck/icheck.min.js')}}"></script>*/
/*   <!-- daterangepicker -->*/
/*   <script type="text/javascript" src="{{ asset('adminSheet/js/moment/moment.min.js')}}"></script>*/
/*   <script type="text/javascript" src="{{ asset('adminSheet/js/datepicker/daterangepicker.js')}}"></script>*/
/*   <!-- chart js -->*/
/*   <script src="{{ asset('adminSheet/js/chartjs/chart.min.js')}}"></script>*/
/* */
/*   <script src="{{ asset('adminSheet/js/custom.js')}}"></script>*/
/* */
/*   <!-- flot js -->*/
/*   <!--[if lte IE 8]><script type="text/javascript" src="{{ asset('adminSheet/js/excanvas.min.js')}}"></script><![endif]-->*/
/*   <script type="text/javascript" src="{{ asset('adminSheet/js/flot/jquery.flot.js')}}"></script>*/
/*   <script type="text/javascript" src="{{ asset('adminSheet/js/flot/jquery.flot.pie.js')}}"></script>*/
/*   <script type="text/javascript" src="{{ asset('adminSheet/js/flot/jquery.flot.orderBars.js')}}"></script>*/
/*   <script type="text/javascript" src="{{ asset('adminSheet/js/flot/jquery.flot.time.min.js')}}"></script>*/
/*   <script type="text/javascript" src="{{ asset('adminSheet/js/flot/date.js')}}"></script>*/
/*   <script type="text/javascript" src="{{ asset('adminSheet/js/flot/jquery.flot.spline.js')}}"></script>*/
/*   <script type="text/javascript" src="{{ asset('adminSheet/js/flot/jquery.flot.stack.js')}}"></script>*/
/*   <script type="text/javascript" src="{{ asset('adminSheet/js/flot/curvedLines.js')}}"></script>*/
/*   <script type="text/javascript" src="{{ asset('adminSheet/js/flot/jquery.flot.resize.js')}}"></script>*/
/*   <script>*/
/*     $(document).ready(function() {*/
/*       // [17, 74, 6, 39, 20, 85, 7]*/
/*       //[82, 23, 66, 9, 99, 6, 2]*/
/*       var data1 = [*/
/*         [gd(2012, 1, 1), 17],*/
/*         [gd(2012, 1, 2), 74],*/
/*         [gd(2012, 1, 3), 6],*/
/*         [gd(2012, 1, 4), 39],*/
/*         [gd(2012, 1, 5), 20],*/
/*         [gd(2012, 1, 6), 85],*/
/*         [gd(2012, 1, 7), 7]*/
/*       ];*/
/* */
/*       var data2 = [*/
/*         [gd(2012, 1, 1), 82],*/
/*         [gd(2012, 1, 2), 23],*/
/*         [gd(2012, 1, 3), 66],*/
/*         [gd(2012, 1, 4), 9],*/
/*         [gd(2012, 1, 5), 119],*/
/*         [gd(2012, 1, 6), 6],*/
/*         [gd(2012, 1, 7), 9]*/
/*       ];*/
/*       $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [*/
/*         data1, data2*/
/*       ], {*/
/*         series: {*/
/*           lines: {*/
/*             show: false,*/
/*             fill: true*/
/*           },*/
/*           splines: {*/
/*             show: true,*/
/*             tension: 0.4,*/
/*             lineWidth: 1,*/
/*             fill: 0.4*/
/*           },*/
/*           points: {*/
/*             radius: 0,*/
/*             show: true*/
/*           },*/
/*           shadowSize: 2*/
/*         },*/
/*         grid: {*/
/*           verticalLines: true,*/
/*           hoverable: true,*/
/*           clickable: true,*/
/*           tickColor: "#d5d5d5",*/
/*           borderWidth: 1,*/
/*           color: '#fff'*/
/*         },*/
/*         colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],*/
/*         xaxis: {*/
/*           tickColor: "rgba(51, 51, 51, 0.06)",*/
/*           mode: "time",*/
/*           tickSize: [1, "day"],*/
/*           //tickLength: 10,*/
/*           axisLabel: "Date",*/
/*           axisLabelUseCanvas: true,*/
/*           axisLabelFontSizePixels: 12,*/
/*           axisLabelFontFamily: 'Verdana, Arial',*/
/*           axisLabelPadding: 10*/
/*             //mode: "time", timeformat: "%m/%d/%y", minTickSize: [1, "day"]*/
/*         },*/
/*         yaxis: {*/
/*           ticks: 8,*/
/*           tickColor: "rgba(51, 51, 51, 0.06)",*/
/*         },*/
/*         tooltip: false*/
/*       });*/
/* */
/*       function gd(year, month, day) {*/
/*         return new Date(year, month - 1, day).getTime();*/
/*       }*/
/*     });*/
/*   </script>*/
/* */
/*   <!-- worldmap -->*/
/*   <script type="text/javascript" src="{{ asset('adminSheet/js/maps/jquery-jvectormap-2.0.3.min.js')}}"></script>*/
/*   <script type="text/javascript" src="{{ asset('adminSheet/js/maps/gdp-data.js')}}"></script>*/
/*   <script type="text/javascript" src="{{ asset('adminSheet/js/maps/jquery-jvectormap-world-mill-en.js')}}"></script>*/
/*   <script type="text/javascript" src="{{ asset('adminSheet/js/maps/jquery-jvectormap-us-aea-en.js')}}"></script>*/
/*   <!-- pace -->*/
/*   <script src="{{ asset('adminSheet/js/pace/pace.min.js')}}"></script>*/
/*   <script>*/
/*     $(function() {*/
/*       $('#world-map-gdp').vectorMap({*/
/*         map: 'world_mill_en',*/
/*         backgroundColor: 'transparent',*/
/*         zoomOnScroll: false,*/
/*         series: {*/
/*           regions: [{*/
/*             values: gdpData,*/
/*             scale: ['#E6F2F0', '#149B7E'],*/
/*             normalizeFunction: 'polynomial'*/
/*           }]*/
/*         },*/
/*         onRegionTipShow: function(e, el, code) {*/
/*           el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');*/
/*         }*/
/*       });*/
/*     });*/
/*   </script>*/
/*   <!-- skycons -->*/
/*   <script src="{{ asset('adminSheet/js/skycons/skycons.min.js')}}"></script>*/
/*   <script>*/
/*     var icons = new Skycons({*/
/*         "color": "#73879C"*/
/*       }),*/
/*       list = [*/
/*         "clear-day", "clear-night", "partly-cloudy-day",*/
/*         "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",*/
/*         "fog"*/
/*       ],*/
/*       i;*/
/* */
/*     for (i = list.length; i--;)*/
/*       icons.set(list[i], list[i]);*/
/* */
/*     icons.play();*/
/*   </script>*/
/* */
/*   <!-- Doughnut Chart -->*/
/*   <script>*/
/*     $('document').ready(function() {*/
/*       var options = {*/
/*         legend: false,*/
/*         responsive: false*/
/*       };*/
/* */
/*       new Chart(document.getElementById("canvas1"), {*/
/*         type: 'doughnut',*/
/*         tooltipFillColor: "rgba(51, 51, 51, 0.55)",*/
/*         data: {*/
/*           labels: [*/
/*             "Symbian",*/
/*             "Blackberry",*/
/*             "Other",*/
/*             "Android",*/
/*             "IOS"*/
/*           ],*/
/*           datasets: [{*/
/*             data: [15, 20, 30, 10, 30],*/
/*             backgroundColor: [*/
/*               "#BDC3C7",*/
/*               "#9B59B6",*/
/*               "#E74C3C",*/
/*               "#26B99A",*/
/*               "#3498DB"*/
/*             ],*/
/*             hoverBackgroundColor: [*/
/*               "#CFD4D8",*/
/*               "#B370CF",*/
/*               "#E95E4F",*/
/*               "#36CAAB",*/
/*               "#49A9EA"*/
/*             ]*/
/*           }]*/
/*         },*/
/*         options: options*/
/*       });*/
/*     });*/
/*   </script>*/
/*   <!-- /Doughnut Chart -->*/
/*   */
/*   <!-- datepicker -->*/
/*   <script type="text/javascript">*/
/*     $(document).ready(function() {*/
/* */
/*       var cb = function(start, end, label) {*/
/*         console.log(start.toISOString(), end.toISOString(), label);*/
/*         $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));*/
/*         //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");*/
/*       }*/
/* */
/*       var optionSet1 = {*/
/*         startDate: moment().subtract(29, 'days'),*/
/*         endDate: moment(),*/
/*         minDate: '01/01/2012',*/
/*         maxDate: '12/31/2015',*/
/*         dateLimit: {*/
/*           days: 60*/
/*         },*/
/*         showDropdowns: true,*/
/*         showWeekNumbers: true,*/
/*         timePicker: false,*/
/*         timePickerIncrement: 1,*/
/*         timePicker12Hour: true,*/
/*         ranges: {*/
/*           'Today': [moment(), moment()],*/
/*           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],*/
/*           'Last 7 Days': [moment().subtract(6, 'days'), moment()],*/
/*           'Last 30 Days': [moment().subtract(29, 'days'), moment()],*/
/*           'This Month': [moment().startOf('month'), moment().endOf('month')],*/
/*           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]*/
/*         },*/
/*         opens: 'left',*/
/*         buttonClasses: ['btn btn-default'],*/
/*         applyClass: 'btn-small btn-primary',*/
/*         cancelClass: 'btn-small',*/
/*         format: 'MM/DD/YYYY',*/
/*         separator: ' to ',*/
/*         locale: {*/
/*           applyLabel: 'Submit',*/
/*           cancelLabel: 'Clear',*/
/*           fromLabel: 'From',*/
/*           toLabel: 'To',*/
/*           customRangeLabel: 'Custom',*/
/*           daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],*/
/*           monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],*/
/*           firstDay: 1*/
/*         }*/
/*       };*/
/*       $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));*/
/*       $('#reportrange').daterangepicker(optionSet1, cb);*/
/*       $('#reportrange').on('show.daterangepicker', function() {*/
/*         console.log("show event fired");*/
/*       });*/
/*       $('#reportrange').on('hide.daterangepicker', function() {*/
/*         console.log("hide event fired");*/
/*       });*/
/*       $('#reportrange').on('apply.daterangepicker', function(ev, picker) {*/
/*         console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));*/
/*       });*/
/*       $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {*/
/*         console.log("cancel event fired");*/
/*       });*/
/*       $('#options1').click(function() {*/
/*         $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);*/
/*       });*/
/*       $('#options2').click(function() {*/
/*         $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);*/
/*       });*/
/*       $('#destroy').click(function() {*/
/*         $('#reportrange').data('daterangepicker').remove();*/
/*       });*/
/*     });*/
/*   </script>*/
/*   <script>*/
/*     NProgress.done();*/
/*   </script>*/
/*   */
/* {% block script %}{% endblock %}*/
/*   <!-- /datepicker -->*/
/*   <!-- /footer content -->*/
/* </body>*/
/* */
/* </html>*/
/* */
