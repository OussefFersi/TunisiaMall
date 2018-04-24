<?php

/* TmallAdminBundle:Main:table_dynamic_products.html.twig */
class __TwigTemplate_bc06e647bf71d305811b076eeaaca3a3a0efe2cf882d8fd91dd818ab82fffd98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TmallAdminBundle::admin_template_layout.html.twig", "TmallAdminBundle:Main:table_dynamic_products.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TmallAdminBundle::admin_template_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/datatables/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/datatables/fixedHeader.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/datatables/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/datatables/scroller.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  ";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "      
      <div class=\"right_col\" role=\"main\">
        <div class=\"\">
          <div class=\"page-title\">
            <div class=\"title_left\">
              <h3>
                   Products
                    <small>
                        
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

            <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Table <small>Producs</small></h2>
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
                  <p class=\"text-muted font-13 m-b-30\">
                    
                  </p>
                  <table id=\"datatable\" class=\"table table-striped table-bordered\">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Store</th>
                        <th>Category</th>
                        
                        <th>Delite</th>
                      </tr>
                    </thead>


                    <tbody>
                    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            echo "    
                      <tr>
                        <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prix", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "boutique", array()), "nom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "category", array()), "nom", array()), "html", null, true);
            echo "</td>
                        
                        <td>
                            <form name=\"form\" method=\"post\" action=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                <input type=\"submit\" value=\"Delete\">
                                
                            </form
                            
                        </td>
                      </tr>
                     
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "   
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

           
                      </div>
                    </div >
                    
                       ";
        // line 107
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                  
                  </div>
                
        

        ";
    }

    // line 119
    public function block_script($context, array $blocks = array())
    {
        // line 120
        echo "        <!-- Datatables-->
        <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/datatables/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/datatables/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/datatables/jszip.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/datatables/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/datatables/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/datatables/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/datatables/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/datatables/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/datatables/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/datatables/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/datatables/responsive.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/datatables/dataTables.scroller.min.js"), "html", null, true);
        echo "\"></script>


        <!-- pace -->
        <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/pace/pace.min.js"), "html", null, true);
        echo "\"></script>
        <script>
          var handleDataTableButtons = function() {
              \"use strict\";
              0 !== \$(\"#datatable-buttons\").length && \$(\"#datatable-buttons\").DataTable({
                dom: \"Bfrtip\",
                buttons: [{
                  extend: \"copy\",
                  className: \"btn-sm\"
                }, {
                  extend: \"csv\",
                  className: \"btn-sm\"
                }, {
                  extend: \"excel\",
                  className: \"btn-sm\"
                }, {
                  extend: \"pdf\",
                  className: \"btn-sm\"
                }, {
                  extend: \"print\",
                  className: \"btn-sm\"
                }],
                responsive: !0
              })
            },
            TableManageButtons = function() {
              \"use strict\";
              return {
                init: function() {
                  handleDataTableButtons()
                }
              }
            }();
        </script>
        <script type=\"text/javascript\">
          \$(document).ready(function() {
            \$('#datatable').dataTable();
            \$('#datatable-keytable').DataTable({
              keys: true
            });
            \$('#datatable-responsive').DataTable();
            \$('#datatable-scroller').DataTable({
              ajax: \"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/js/datatables/json/scroller-demo.json"), "html", null, true);
        echo "\",
              deferRender: true,
              scrollY: 380,
              scrollCollapse: true,
              scroller: true
            });
            var table = \$('#datatable-fixed-header').DataTable({
              fixedHeader: true
            });
          });
          TableManageButtons.init();
        </script>

";
    }

    public function getTemplateName()
    {
        return "TmallAdminBundle:Main:table_dynamic_products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 180,  257 => 138,  250 => 134,  246 => 133,  242 => 132,  238 => 131,  234 => 130,  230 => 129,  226 => 128,  222 => 127,  218 => 126,  214 => 125,  210 => 124,  206 => 123,  202 => 122,  198 => 121,  195 => 120,  192 => 119,  181 => 107,  168 => 96,  153 => 87,  147 => 84,  143 => 83,  139 => 82,  135 => 81,  128 => 79,  59 => 12,  56 => 11,  50 => 7,  46 => 6,  42 => 5,  38 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "TmallAdminBundle::admin_template_layout.html.twig" %}*/
/*  {% block head %}*/
/*   <link href="{{ asset('adminSheet/js/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />*/
/*   <link href="{{ asset('adminSheet/js/datatables/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />*/
/*   <link href="{{ asset('adminSheet/js/datatables/fixedHeader.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />*/
/*   <link href="{{ asset('adminSheet/js/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />*/
/*   <link href="{{ asset('adminSheet/js/datatables/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />*/
/*   {% endblock %}*/
/*   */
/*     */
/* {% block content %}*/
/*       */
/*       <div class="right_col" role="main">*/
/*         <div class="">*/
/*           <div class="page-title">*/
/*             <div class="title_left">*/
/*               <h3>*/
/*                    Products*/
/*                     <small>*/
/*                         */
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
/*           </div>*/
/*           <div class="clearfix"></div>*/
/* */
/*           <div class="row">*/
/* */
/*             <div class="col-md-12 col-sm-12 col-xs-12">*/
/*               <div class="x_panel">*/
/*                 <div class="x_title">*/
/*                   <h2>Table <small>Producs</small></h2>*/
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
/*                   <p class="text-muted font-13 m-b-30">*/
/*                     */
/*                   </p>*/
/*                   <table id="datatable" class="table table-striped table-bordered">*/
/*                     <thead>*/
/*                       <tr>*/
/*                         <th>Name</th>*/
/*                         <th>Price</th>*/
/*                         <th>Store</th>*/
/*                         <th>Category</th>*/
/*                         */
/*                         <th>Delite</th>*/
/*                       </tr>*/
/*                     </thead>*/
/* */
/* */
/*                     <tbody>*/
/*                     {% for entity in pagination %}    */
/*                       <tr>*/
/*                         <td>{{ entity.titre }}</td>*/
/*                         <td>{{ entity.prix }}</td>*/
/*                         <td>{{ entity.boutique.nom}}</td>*/
/*                         <td>{{ entity.category.nom}}</td>*/
/*                         */
/*                         <td>*/
/*                             <form name="form" method="post" action="{{path('product_delete',{ 'id': entity.id })}}">*/
/*                                 <input type="submit" value="Delete">*/
/*                                 */
/*                             </form*/
/*                             */
/*                         </td>*/
/*                       </tr>*/
/*                      */
/*                       {% endfor %}*/
/*    */
/*                     </tbody>*/
/*                   </table>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/* */
/*            */
/*                       </div>*/
/*                     </div >*/
/*                     */
/*                        {{ knp_pagination_render(pagination) }}*/
/*                   */
/*                   </div>*/
/*                 */
/*         */
/* */
/*         {% endblock %}   */
/* */
/*         */
/* */
/* */
/*         */
/* {% block script %}*/
/*         <!-- Datatables-->*/
/*         <script src="{{ asset('adminSheet/js/datatables/jquery.dataTables.min.js')}}"></script>*/
/*         <script src="{{ asset('adminSheet/js/datatables/dataTables.bootstrap.js')}}"></script>*/
/*         <script src="{{ asset('adminSheet/js/datatables/dataTables.buttons.min.js')}}"></script>*/
/*         <script src="{{ asset('adminSheet/js/datatables/buttons.bootstrap.min.js')}}"></script>*/
/*         <script src="{{ asset('adminSheet/js/datatables/jszip.min.js')}}"></script>*/
/*         <script src="{{ asset('adminSheet/js/datatables/pdfmake.min.js')}}"></script>*/
/*         <script src="{{ asset('adminSheet/js/datatables/vfs_fonts.js')}}"></script>*/
/*         <script src="{{ asset('adminSheet/js/datatables/buttons.html5.min.js')}}"></script>*/
/*         <script src="{{ asset('adminSheet/js/datatables/buttons.print.min.js')}}"></script>*/
/*         <script src="{{ asset('adminSheet/js/datatables/dataTables.fixedHeader.min.js')}}"></script>*/
/*         <script src="{{ asset('adminSheet/js/datatables/dataTables.keyTable.min.js')}}"></script>*/
/*         <script src="{{ asset('adminSheet/js/datatables/dataTables.responsive.min.js')}}"></script>*/
/*         <script src="{{ asset('adminSheet/js/datatables/responsive.bootstrap.min.js')}}"></script>*/
/*         <script src="{{ asset('adminSheet/js/datatables/dataTables.scroller.min.js')}}"></script>*/
/* */
/* */
/*         <!-- pace -->*/
/*         <script src="{{ asset('adminSheet/js/pace/pace.min.js')}}"></script>*/
/*         <script>*/
/*           var handleDataTableButtons = function() {*/
/*               "use strict";*/
/*               0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({*/
/*                 dom: "Bfrtip",*/
/*                 buttons: [{*/
/*                   extend: "copy",*/
/*                   className: "btn-sm"*/
/*                 }, {*/
/*                   extend: "csv",*/
/*                   className: "btn-sm"*/
/*                 }, {*/
/*                   extend: "excel",*/
/*                   className: "btn-sm"*/
/*                 }, {*/
/*                   extend: "pdf",*/
/*                   className: "btn-sm"*/
/*                 }, {*/
/*                   extend: "print",*/
/*                   className: "btn-sm"*/
/*                 }],*/
/*                 responsive: !0*/
/*               })*/
/*             },*/
/*             TableManageButtons = function() {*/
/*               "use strict";*/
/*               return {*/
/*                 init: function() {*/
/*                   handleDataTableButtons()*/
/*                 }*/
/*               }*/
/*             }();*/
/*         </script>*/
/*         <script type="text/javascript">*/
/*           $(document).ready(function() {*/
/*             $('#datatable').dataTable();*/
/*             $('#datatable-keytable').DataTable({*/
/*               keys: true*/
/*             });*/
/*             $('#datatable-responsive').DataTable();*/
/*             $('#datatable-scroller').DataTable({*/
/*               ajax: "{{ asset('adminSheet/js/datatables/json/scroller-demo.json')}}",*/
/*               deferRender: true,*/
/*               scrollY: 380,*/
/*               scrollCollapse: true,*/
/*               scroller: true*/
/*             });*/
/*             var table = $('#datatable-fixed-header').DataTable({*/
/*               fixedHeader: true*/
/*             });*/
/*           });*/
/*           TableManageButtons.init();*/
/*         </script>*/
/* */
/* {% endblock %}*/
