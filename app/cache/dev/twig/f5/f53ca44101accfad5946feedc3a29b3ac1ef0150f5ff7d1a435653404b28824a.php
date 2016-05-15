<?php

/* TMallVendorBundle:Product:index.html.twig */
class __TwigTemplate_8a990e3ba95d533d79dbb048a741c310504e72cfffab708401add717fefc3b59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TMallVendorBundle::layout.html.twig", "TMallVendorBundle:Product:index.html.twig", 1);
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

    // line 4
    public function block_navbar($context, array $blocks = array())
    {
        // line 5
        echo "    
    
  <div class=\"navbar\">

  <div class=\"top-bar\">
  
\t<div class=\"row\">
  
\t\t<div class=\"pull-left visible-xs visible-sm padding_5 left_padding_15\">
\t\t\t<a href=\"javascript:ShowHide('nav_menu')\" class=\"expand_menu_link\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/images/menu-grid.gif"), "html", null, true);
        echo "\" alt=\"expand menu\"/> &nbsp; Menu</a>
\t\t</div>
\t\t<div class=\"clearfix\"></div>
        <div id=\"nav_menu\" class=\"navbar-collapse\">
          <ul class=\"main-top-menu nav navbar-nav\">
            
<li class=\"dropdown\"><a class=\"main-top-link\" href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("tmall_vendor_MyStores");
        echo "\">My Stores</a>

</li>
<li class=\"dropdown\"><a class=\"main-top-link\" href=\"\">Profile</a>

</li>
<li class=\"dropdown\"><a class=\"main-top-link\" href=\"\">????</a>

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

    // line 56
    public function block_container($context, array $blocks = array())
    {
        // line 57
        echo "   
<div class=\"container\">\t
\t
\t<div id=\"main_content\" class=\"text-left col-md-12 min-height-300\">
\t\t
\t\t<div class=\"fright\">
\t<a class=\"small-tile green-back\" href=\"index.php?category=products_manager&amp;action=products_add\"><img class=\"pull-right\" width=\"32\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/images/icons/products_add.png"), "html", null, true);
        echo "\"><h3 class=\"h3-tile\">Add New Product</h3>
\t</a><a class=\"small-tile lila-back\" href=\"index.php?category=products_manager&amp;action=products_export\"><img class=\"pull-right\" width=\"32\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/images/icons/default.png"), "html", null, true);
        echo "\"><h3 class=\"h3-tile\">Export or Import</h3>
\t</a></div>
<div class=\"clear\"></div>
<br>
<h3 class=\"no-margin\">My Products</h3>




\t
\t
<div class=\"pull-right\" style=\"position:relative;top:-10px\">
    ";
        // line 76
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("TMallVendorBundle:produit:recherche"), array());
        echo "  
    
\t\t</div>
\t\t<div class=\"clear\"></div>
                
                <div class=\"table-responsive\">
    <table class=\"table table-hover admin-table\">
        <thead>
            <tr>
                <th></th>
                <th>Title</th>
                <th>Image</th>
                <th>Prix</th>
                <th>Quantity</th>
                <th>Category</th>
                <th>Show</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 97
            echo "            <tr bgcolor=\"#ffffff\">
                <td><input title=\"catalogAdd\" type=\"checkbox\" name=\"CheckList[]\" value=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\" ></td>
                <td>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("" . $this->getAttribute($this->getAttribute($context["entity"], "photo", array()), "path", array())) . "")), "html", null, true);
            echo "\" class=\"hover\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("" . $this->getAttribute($this->getAttribute($context["entity"], "photo", array()), "path", array())) . "")), "html", null, true);
            echo "\" width=\"100\" height=\"60\"></a></td>
                <td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prix", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "quantity", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "category", array()), "nom", array()), "html", null, true);
            echo "</td>
                
                
                    
                <td><a href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/images/icons/options_add.png"), "html", null, true);
            echo "\" height=\"23\"  border=\"0\"></a></td>
                    
                   
                    <td><a href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/images/edit-icon.gif"), "html", null, true);
            echo "\" border=\"0\">   </a></td>
                    
                    
                
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                                                                
        </tbody>
    </table>
        ";
        // line 119
        echo "        <div class=\"navigation\">
    ";
        // line 120
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
      </div>
                </div>
\t\t</div> 
\t\t\t\t
\t\t<div class=\"clear\"></div>
\t\t<br><br>
\t</div>

        
    ";
    }

    public function getTemplateName()
    {
        return "TMallVendorBundle:Product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 120,  208 => 119,  203 => 115,  189 => 110,  181 => 107,  174 => 103,  170 => 102,  166 => 101,  160 => 100,  156 => 99,  152 => 98,  149 => 97,  145 => 96,  122 => 76,  107 => 64,  103 => 63,  95 => 57,  92 => 56,  52 => 20,  43 => 14,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends "TMallVendorBundle::layout.html.twig" %}*/
/* */
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
/* <li class="dropdown"><a class="main-top-link" href="{{path('tmall_vendor_MyStores')}}">My Stores</a>*/
/* */
/* </li>*/
/* <li class="dropdown"><a class="main-top-link" href="">Profile</a>*/
/* */
/* </li>*/
/* <li class="dropdown"><a class="main-top-link" href="">????</a>*/
/* */
/* </li>*/
/* */
/* */
/* */
/* */
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
/*    */
/* <div class="container">	*/
/* 	*/
/* 	<div id="main_content" class="text-left col-md-12 min-height-300">*/
/* 		*/
/* 		<div class="fright">*/
/* 	<a class="small-tile green-back" href="index.php?category=products_manager&amp;action=products_add"><img class="pull-right" width="32" src="{{asset('vendor/images/icons/products_add.png')}}"><h3 class="h3-tile">Add New Product</h3>*/
/* 	</a><a class="small-tile lila-back" href="index.php?category=products_manager&amp;action=products_export"><img class="pull-right" width="32" src="{{asset('vendor/images/icons/default.png')}}"><h3 class="h3-tile">Export or Import</h3>*/
/* 	</a></div>*/
/* <div class="clear"></div>*/
/* <br>*/
/* <h3 class="no-margin">My Products</h3>*/
/* */
/* */
/* */
/* */
/* 	*/
/* 	*/
/* <div class="pull-right" style="position:relative;top:-10px">*/
/*     {% render(controller('TMallVendorBundle:produit:recherche'))%}  */
/*     */
/* 		</div>*/
/* 		<div class="clear"></div>*/
/*                 */
/*                 <div class="table-responsive">*/
/*     <table class="table table-hover admin-table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th></th>*/
/*                 <th>Title</th>*/
/*                 <th>Image</th>*/
/*                 <th>Prix</th>*/
/*                 <th>Quantity</th>*/
/*                 <th>Category</th>*/
/*                 <th>Show</th>*/
/*                 <th>Edit</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in pagination %}*/
/*             <tr bgcolor="#ffffff">*/
/*                 <td><input title="catalogAdd" type="checkbox" name="CheckList[]" value="{{entity.id}}" ></td>*/
/*                 <td>{{ entity.titre }}</td>*/
/*                 <td><a href="{{asset(''~ entity.photo.path ~'')}}" class="hover"><img src="{{asset(''~ entity.photo.path ~'')}}" width="100" height="60"></a></td>*/
/*                 <td>{{ entity.prix }}</td>*/
/*                 <td>{{ entity.quantity }}</td>*/
/*                 <td>{{entity.category.nom}}</td>*/
/*                 */
/*                 */
/*                     */
/*                 <td><a href="{{ path('produit_show', { 'id': entity.id }) }}"><img src="{{asset('vendor/images/icons/options_add.png')}}" height="23"  border="0"></a></td>*/
/*                     */
/*                    */
/*                     <td><a href="{{ path('produit_edit', { 'id': entity.id }) }}"><img src="{{asset('vendor/images/edit-icon.gif')}}" border="0">   </a></td>*/
/*                     */
/*                     */
/*                 */
/*             </tr>*/
/*         {% endfor %}                                                                */
/*         </tbody>*/
/*     </table>*/
/*         {# display navigation #}*/
/*         <div class="navigation">*/
/*     {{ knp_pagination_render(pagination) }}*/
/*       </div>*/
/*                 </div>*/
/* 		</div> */
/* 				*/
/* 		<div class="clear"></div>*/
/* 		<br><br>*/
/* 	</div>*/
/* */
/*         */
/*     {% endblock %}*/
/* */
