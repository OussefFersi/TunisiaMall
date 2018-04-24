<?php

/* TmallAdminBundle:Main:e_commerce.html.twig */
class __TwigTemplate_9ee1ccb9da090baa326e0572d1c862e592fb16a56b4c937f9fb8cac027f6614b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TMallAdminBundle::Main/admin_layout.html.twig", "TmallAdminBundle:Main:e_commerce.html.twig", 3);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TMallAdminBundle::Main/admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "      <!-- page content -->
      <div class=\"right_col\" role=\"main\">

        <div class=\"\">
          <div class=\"page-title\">
            <div class=\"title_left\">
              <h3>E-commerce :: Product Page</h3>
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
                  <h2>E-commerce page design</h2>
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

                  <div class=\"col-md-7 col-sm-7 col-xs-12\">
                    <div class=\"product-image\">
                      <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/images/prod1.jpg"), "html", null, true);
        echo "\" alt=\"...\" />
                    </div>
                    <div class=\"product_gallery\">
                      <a>
                        <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/images/prod2.jpg"), "html", null, true);
        echo "\" alt=\"...\" />
                      </a>
                      <a>
                        <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/images/prod3.jpg"), "html", null, true);
        echo "\" alt=\"...\" />
                      </a>
                      <a>
                        <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/images/prod4.jpg"), "html", null, true);
        echo "\" alt=\"...\" />
                      </a>
                      <a>
                        <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("adminSheet/images/prod5.jpg"), "html", null, true);
        echo "\" alt=\"...\" />
                      </a>
                    </div>
                  </div>

                  <div class=\"col-md-5 col-sm-5 col-xs-12\" style=\"border:0px solid #e5e5e5;\">

                    <h3 class=\"prod_title\">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>

                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
                    <br />

                    <div class=\"\">
                      <h2>Available Colors</h2>
                      <ul class=\"list-inline prod_color\">
                        <li>
                          <p>Green</p>
                          <div class=\"color bg-green\"></div>
                        </li>
                        <li>
                          <p>Blue</p>
                          <div class=\"color bg-blue\"></div>
                        </li>
                        <li>
                          <p>Red</p>
                          <div class=\"color bg-red\"></div>
                        </li>
                        <li>
                          <p>Orange</p>
                          <div class=\"color bg-orange\"></div>
                        </li>

                      </ul>
                    </div>
                    <br />

                    <div class=\"\">
                      <h2>Size <small>Please select one</small></h2>
                      <ul class=\"list-inline prod_size\">
                        <li>
                          <button type=\"button\" class=\"btn btn-default btn-xs\">Small</button>
                        </li>
                        <li>
                          <button type=\"button\" class=\"btn btn-default btn-xs\">Medium</button>
                        </li>
                        <li>
                          <button type=\"button\" class=\"btn btn-default btn-xs\">Large</button>
                        </li>
                        <li>
                          <button type=\"button\" class=\"btn btn-default btn-xs\">Xtra-Large</button>
                        </li>
                      </ul>
                    </div>
                    <br />

                    <div class=\"\">
                      <div class=\"product_price\">
                        <h1 class=\"price\">Ksh80.00</h1>
                        <span class=\"price-tax\">Ex Tax: Ksh80.00</span>
                        <br>
                      </div>
                    </div>

                    <div class=\"\">
                      <button type=\"button\" class=\"btn btn-default btn-lg\">Add to Cart</button>
                      <button type=\"button\" class=\"btn btn-default btn-lg\">Add to Wishlist</button>
                    </div>

                    <div class=\"product_social\">
                      <ul class=\"list-inline\">
                        <li><a href=\"#\"><i class=\"fa fa-facebook-square\"></i></a>
                        </li>
                        <li><a href=\"#\"><i class=\"fa fa-twitter-square\"></i></a>
                        </li>
                        <li><a href=\"#\"><i class=\"fa fa-envelope-square\"></i></a>
                        </li>
                        <li><a href=\"#\"><i class=\"fa fa-rss-square\"></i></a>
                        </li>
                      </ul>
                    </div>

                  </div>


                  <div class=\"col-md-12\">

                    <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                      <ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
                        <li role=\"presentation\" class=\"active\"><a href=\"#tab_content1\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">Home</a>
                        </li>
                        <li role=\"presentation\" class=\"\"><a href=\"#tab_content2\" role=\"tab\" id=\"profile-tab\" data-toggle=\"tab\" aria-expanded=\"false\">Profile</a>
                        </li>
                        <li role=\"presentation\" class=\"\"><a href=\"#tab_content3\" role=\"tab\" id=\"profile-tab2\" data-toggle=\"tab\" aria-expanded=\"false\">Profile</a>
                        </li>
                      </ul>
                      <div id=\"myTabContent\" class=\"tab-content\">
                        <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"tab_content1\" aria-labelledby=\"home-tab\">
                          <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                            synth. Cosby sweater eu banh mi, qui irure terr.</p>
                        </div>
                        <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab_content2\" aria-labelledby=\"profile-tab\">
                          <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                            booth letterpress, commodo enim craft beer mlkshk aliquip</p>
                        </div>
                        <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab_content3\" aria-labelledby=\"profile-tab\">
                          <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                            photo booth letterpress, commodo enim craft beer mlkshk </p>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->

       ";
    }

    public function getTemplateName()
    {
        return "TmallAdminBundle:Main:e_commerce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 68,  100 => 65,  94 => 62,  88 => 59,  81 => 55,  31 => 7,  28 => 6,  11 => 3,);
    }
}
/* {# empty Twig template #}*/
/* */
/* {% extends "TMallAdminBundle::Main/admin_layout.html.twig" %}*/
/* */
/*    */
/* {% block content %}*/
/*       <!-- page content -->*/
/*       <div class="right_col" role="main">*/
/* */
/*         <div class="">*/
/*           <div class="page-title">*/
/*             <div class="title_left">*/
/*               <h3>E-commerce :: Product Page</h3>*/
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
/*             <div class="col-md-12 col-sm-12 col-xs-12">*/
/*               <div class="x_panel">*/
/*                 <div class="x_title">*/
/*                   <h2>E-commerce page design</h2>*/
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
/* */
/*                   <div class="col-md-7 col-sm-7 col-xs-12">*/
/*                     <div class="product-image">*/
/*                       <img src="{{ asset('adminSheet/images/prod1.jpg')}}" alt="..." />*/
/*                     </div>*/
/*                     <div class="product_gallery">*/
/*                       <a>*/
/*                         <img src="{{ asset('adminSheet/images/prod2.jpg')}}" alt="..." />*/
/*                       </a>*/
/*                       <a>*/
/*                         <img src="{{ asset('adminSheet/images/prod3.jpg')}}" alt="..." />*/
/*                       </a>*/
/*                       <a>*/
/*                         <img src="{{ asset('adminSheet/images/prod4.jpg')}}" alt="..." />*/
/*                       </a>*/
/*                       <a>*/
/*                         <img src="{{ asset('adminSheet/images/prod5.jpg')}}" alt="..." />*/
/*                       </a>*/
/*                     </div>*/
/*                   </div>*/
/* */
/*                   <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">*/
/* */
/*                     <h3 class="prod_title">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>*/
/* */
/*                     <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>*/
/*                     <br />*/
/* */
/*                     <div class="">*/
/*                       <h2>Available Colors</h2>*/
/*                       <ul class="list-inline prod_color">*/
/*                         <li>*/
/*                           <p>Green</p>*/
/*                           <div class="color bg-green"></div>*/
/*                         </li>*/
/*                         <li>*/
/*                           <p>Blue</p>*/
/*                           <div class="color bg-blue"></div>*/
/*                         </li>*/
/*                         <li>*/
/*                           <p>Red</p>*/
/*                           <div class="color bg-red"></div>*/
/*                         </li>*/
/*                         <li>*/
/*                           <p>Orange</p>*/
/*                           <div class="color bg-orange"></div>*/
/*                         </li>*/
/* */
/*                       </ul>*/
/*                     </div>*/
/*                     <br />*/
/* */
/*                     <div class="">*/
/*                       <h2>Size <small>Please select one</small></h2>*/
/*                       <ul class="list-inline prod_size">*/
/*                         <li>*/
/*                           <button type="button" class="btn btn-default btn-xs">Small</button>*/
/*                         </li>*/
/*                         <li>*/
/*                           <button type="button" class="btn btn-default btn-xs">Medium</button>*/
/*                         </li>*/
/*                         <li>*/
/*                           <button type="button" class="btn btn-default btn-xs">Large</button>*/
/*                         </li>*/
/*                         <li>*/
/*                           <button type="button" class="btn btn-default btn-xs">Xtra-Large</button>*/
/*                         </li>*/
/*                       </ul>*/
/*                     </div>*/
/*                     <br />*/
/* */
/*                     <div class="">*/
/*                       <div class="product_price">*/
/*                         <h1 class="price">Ksh80.00</h1>*/
/*                         <span class="price-tax">Ex Tax: Ksh80.00</span>*/
/*                         <br>*/
/*                       </div>*/
/*                     </div>*/
/* */
/*                     <div class="">*/
/*                       <button type="button" class="btn btn-default btn-lg">Add to Cart</button>*/
/*                       <button type="button" class="btn btn-default btn-lg">Add to Wishlist</button>*/
/*                     </div>*/
/* */
/*                     <div class="product_social">*/
/*                       <ul class="list-inline">*/
/*                         <li><a href="#"><i class="fa fa-facebook-square"></i></a>*/
/*                         </li>*/
/*                         <li><a href="#"><i class="fa fa-twitter-square"></i></a>*/
/*                         </li>*/
/*                         <li><a href="#"><i class="fa fa-envelope-square"></i></a>*/
/*                         </li>*/
/*                         <li><a href="#"><i class="fa fa-rss-square"></i></a>*/
/*                         </li>*/
/*                       </ul>*/
/*                     </div>*/
/* */
/*                   </div>*/
/* */
/* */
/*                   <div class="col-md-12">*/
/* */
/*                     <div class="" role="tabpanel" data-example-id="togglable-tabs">*/
/*                       <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">*/
/*                         <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Home</a>*/
/*                         </li>*/
/*                         <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Profile</a>*/
/*                         </li>*/
/*                         <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>*/
/*                         </li>*/
/*                       </ul>*/
/*                       <div id="myTabContent" class="tab-content">*/
/*                         <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">*/
/*                           <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher*/
/*                             synth. Cosby sweater eu banh mi, qui irure terr.</p>*/
/*                         </div>*/
/*                         <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">*/
/*                           <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo*/
/*                             booth letterpress, commodo enim craft beer mlkshk aliquip</p>*/
/*                         </div>*/
/*                         <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">*/
/*                           <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui*/
/*                             photo booth letterpress, commodo enim craft beer mlkshk </p>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/* */
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <!-- /page content -->*/
/* */
/*        {% endblock %}*/
/* */
/*   */