<?php

/* TmallAdminBundle:Utilisateur:show.html.twig */
class __TwigTemplate_a21fc7ba4e2ed427fb0becff62a0d1a6863e01f4b591895b1e6132d8f8c1119c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TmallAdminBundle::admin_template_layout.html.twig", "TmallAdminBundle:Utilisateur:show.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
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
                    Users
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

            <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Default Example <small>Users</small></h2>
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
                        <th>UserName</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Edit</th>
                      </tr>
                    </thead>


                    <tbody>
                      <tr>
                        <td>";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username", array()), "html", null, true);
        echo "</td>
                        <td>";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "roles", array()), 0, array()), "html", null, true);
        echo "</td>
                        <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td><a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("utilisateur_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a></td>
                      </tr>
                      
                      
   
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

           
                      </div>
                    </div>
                  </div>
                
         

        ";
    }

    public function getTemplateName()
    {
        return "TmallAdminBundle:Utilisateur:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 85,  136 => 82,  132 => 81,  128 => 80,  58 => 12,  55 => 11,  49 => 7,  45 => 6,  41 => 5,  37 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {%extends  "TmallAdminBundle::admin_template_layout.html.twig"%}*/
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
/*                     Users*/
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
/*           </div>*/
/*           <div class="clearfix"></div>*/
/* */
/*           <div class="row">*/
/* */
/*             <div class="col-md-12 col-sm-12 col-xs-12">*/
/*               <div class="x_panel">*/
/*                 <div class="x_title">*/
/*                   <h2>Default Example <small>Users</small></h2>*/
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
/*                    */
/*                   </p>*/
/*                   <table id="datatable" class="table table-striped table-bordered">*/
/*                     <thead>*/
/*                       <tr>*/
/*                         <th>UserName</th>*/
/*                         <th>Role</th>*/
/*                         <th>Email</th>*/
/*                         <th>Age</th>*/
/*                         <th>Start date</th>*/
/*                         <th>Edit</th>*/
/*                       </tr>*/
/*                     </thead>*/
/* */
/* */
/*                     <tbody>*/
/*                       <tr>*/
/*                         <td>{{ entity.username }}</td>*/
/*                         <td>{{ entity.roles.0 }}</td>*/
/*                         <td>{{ entity.email }}</td>*/
/*                         <td>61</td>*/
/*                         <td>2011/04/25</td>*/
/*                         <td><a href="{{ path('utilisateur_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a></td>*/
/*                       </tr>*/
/*                       */
/*                       */
/*    */
/*                     </tbody>*/
/*                   </table>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/* */
/*            */
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 */
/*          */
/* */
/*         {% endblock %}   */
/* */
