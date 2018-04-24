<?php

/* TmallAdminBundle:Main:contacts.html.twig */
class __TwigTemplate_2cb884ab5b62a30fe33189e1bcfb2e2f4d75a797f8a8829ab3c887400da5cbfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TmallAdminBundle::admin_template_layout.html.twig", "TmallAdminBundle:Main:contacts.html.twig", 3);
        $this->blocks = array(
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

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "      <!-- page content -->
      <div class=\"right_col\" role=\"main\">

        <div class=\"\">
          <div class=\"page-title\">
            <div class=\"title_left\">
              <h3>Contacts Design</h3>
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
            <div class=\"col-md-12\">
              <div class=\"x_panel\">
                <div class=\"x_content\">

                  <div class=\"row\">

                    <div class=\"col-md-12 col-sm-12 col-xs-12\" style=\"text-align:center;\">
                      <ul class=\"pagination pagination-split\">
                        <li><a href=\"#\">A</a>
                        </li>
                        <li><a href=\"#\">B</a>
                        </li>
                        <li><a href=\"#\">C</a>
                        </li>
                        <li><a href=\"#\">D</a>
                        </li>
                        <li><a href=\"#\">E</a>
                        </li>
                        <li>...</li>
                        <li><a href=\"#\">W</a>
                        </li>
                        <li><a href=\"#\">X</a>
                        </li>
                        <li><a href=\"#\">Y</a>
                        </li>
                        <li><a href=\"#\">Z</a>
                        </li>
                      </ul>
                    </div>
                    <div class=\"clearfix\"></div>

     ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 67
            echo "                    
                    
                    
                    <div class=\"col-md-4 col-sm-4 col-xs-12\"  >
                      <div class=\"well profile_view\">
                        <div class=\"col-sm-12\">
                          <h4 class=\"brief\"><i>Digital Strategist</i></h4>
                          <div class=\"left col-xs-7\">
                            <h2 >";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</h2>
                            <p><strong>About: </strong> Web Designer / UI. </p>
                            <ul class=\"list-unstyled\">
                              <li><i class=\"fa fa-phone\"></i> Address:";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo " </li>
                              <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("utilisateur_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">View Profile</a>

                            </ul>
                          </div>
                          <div class=\"right col-xs-5 text-center\">
                            <img src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/images/img.jpg"), "html", null, true);
            echo "\" alt=\"\" class=\"img-circle img-responsive\">
                          </div>
                        </div>
                       
                      </div>
                    </div>

                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo " 

                   


                    


                  


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
                   
                   ";
        // line 109
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                  
      </div>
      <!-- /page content -->

      ";
    }

    public function getTemplateName()
    {
        return "TmallAdminBundle:Main:contacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 109,  133 => 91,  119 => 84,  111 => 79,  107 => 78,  101 => 75,  91 => 67,  87 => 66,  31 => 12,  28 => 11,  11 => 3,);
    }
}
/* {# empty Twig template #}*/
/* */
/* {% extends "TmallAdminBundle::admin_template_layout.html.twig" %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/*     */
/*     {% block content %}*/
/*       <!-- page content -->*/
/*       <div class="right_col" role="main">*/
/* */
/*         <div class="">*/
/*           <div class="page-title">*/
/*             <div class="title_left">*/
/*               <h3>Contacts Design</h3>*/
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
/*             <div class="col-md-12">*/
/*               <div class="x_panel">*/
/*                 <div class="x_content">*/
/* */
/*                   <div class="row">*/
/* */
/*                     <div class="col-md-12 col-sm-12 col-xs-12" style="text-align:center;">*/
/*                       <ul class="pagination pagination-split">*/
/*                         <li><a href="#">A</a>*/
/*                         </li>*/
/*                         <li><a href="#">B</a>*/
/*                         </li>*/
/*                         <li><a href="#">C</a>*/
/*                         </li>*/
/*                         <li><a href="#">D</a>*/
/*                         </li>*/
/*                         <li><a href="#">E</a>*/
/*                         </li>*/
/*                         <li>...</li>*/
/*                         <li><a href="#">W</a>*/
/*                         </li>*/
/*                         <li><a href="#">X</a>*/
/*                         </li>*/
/*                         <li><a href="#">Y</a>*/
/*                         </li>*/
/*                         <li><a href="#">Z</a>*/
/*                         </li>*/
/*                       </ul>*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/* */
/*      {% for entity in pagination %}*/
/*                     */
/*                     */
/*                     */
/*                     <div class="col-md-4 col-sm-4 col-xs-12"  >*/
/*                       <div class="well profile_view">*/
/*                         <div class="col-sm-12">*/
/*                           <h4 class="brief"><i>Digital Strategist</i></h4>*/
/*                           <div class="left col-xs-7">*/
/*                             <h2 >{{ entity.username }}</h2>*/
/*                             <p><strong>About: </strong> Web Designer / UI. </p>*/
/*                             <ul class="list-unstyled">*/
/*                               <li><i class="fa fa-phone"></i> Address:{{ entity.email }} </li>*/
/*                               <a href="{{ path('utilisateur_show', { 'id': entity.id }) }}">View Profile</a>*/
/* */
/*                             </ul>*/
/*                           </div>*/
/*                           <div class="right col-xs-5 text-center">*/
/*                             <img src="{{ asset('adminSheet/images/img.jpg')}}" alt="" class="img-circle img-responsive">*/
/*                           </div>*/
/*                         </div>*/
/*                        */
/*                       </div>*/
/*                     </div>*/
/* */
/*                    {% endfor %} */
/* */
/*                    */
/* */
/* */
/*                     */
/* */
/* */
/*                   */
/* */
/* */
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*                    */
/*                    {{ knp_pagination_render(pagination) }}*/
/*                   */
/*       </div>*/
/*       <!-- /page content -->*/
/* */
/*       {% endblock %}*/
/* */
/*   */
/* */
