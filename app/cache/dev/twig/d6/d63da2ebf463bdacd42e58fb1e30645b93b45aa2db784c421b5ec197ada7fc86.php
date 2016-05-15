<?php

/* TMallClientBundle:Default:cart.html.twig */
class __TwigTemplate_0715fb6813d60fd67775943e2838271c201301caf300ffbbbdd1b2384ba861d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TMallClientBundle::layout.html.twig", "TMallClientBundle:Default:cart.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TMallClientBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $context["Total"] = 0;
        // line 4
        echo "     ";
        $context["idb"] = 0;
        // line 5
        echo "<div class=\"text-left no-left-padding col-md-9 min-height-300\">
\t\t
\t\t
\t<div class=\"separator clear\"></div>
\t<br/>


\t<div class=\"separator clear\"></div>
\t<br/>

<B><i><h1 style=\"color: #08c\">Your Products :</h1></i></B>
</br>

<div class=\"table-responsive\">
<table class=\"table table-bordered table-striped\">
  <thead>
\t  <tr>
\t\t
\t\t<th>Product</th>
        <th>Price</th>
\t\t<th>Quantity</th>
\t\t<th>Total</th>
                <th>Remove</th>
\t</tr>
\t</thead>
\t<tbody>
          
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paniers"]) ? $context["paniers"] : $this->getContext($context, "paniers")));
        foreach ($context['_seq'] as $context["_key"] => $context["panier"]) {
            // line 33
            echo "\t<form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("t_mall_client_ajouter", array("id" => $this->getAttribute($context["panier"], "id", array()))), "html", null, true);
            echo "\" method=\"get\">
            
\t\t  
\t<tr>
\t\t
\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["panier"], "ID_P", array()), "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["panier"], "ID_P", array()), "prix", array()), "html", null, true);
            echo "</td>\t
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["panier"], "Qte", array()), "html", null, true);
            echo "</td>
         <td>";
            // line 41
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["panier"], "ID_P", array()), "prix", array()) * $this->getAttribute($context["panier"], "Qte", array())), "html", null, true);
            echo "</td>
\t<td><a class=\"btn btn-default\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("t_mall_client_supprimer", array("id" => $this->getAttribute($context["panier"], "id", array()))), "html", null, true);
            echo "\">remove</a></td>
        </tr>
\t  
\t
\t
\t\t\t
\t\t
\t\t</form>  
            
            ";
            // line 51
            $context["Total"] = ((isset($context["Total"]) ? $context["Total"] : $this->getContext($context, "Total")) + ($this->getAttribute($this->getAttribute($context["panier"], "ID_P", array()), "prix", array()) * $this->getAttribute($context["panier"], "Qte", array())));
            // line 52
            echo "             ";
            $context["idb"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["panier"], "ID_P", array()), "boutique", array()), "id", array());
            // line 53
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
\t</tbody>
</table>


</div>

<span class=\"price_style pull-left\">Total à payer : ";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["Total"]) ? $context["Total"] : $this->getContext($context, "Total")), "html", null, true);
        echo " € </span>
  
<div class=\"clear\"></div>
<br><br>
<div class=\"r-margin-18 pull-left\"><form action=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("t_mall_client_home", array("id" => (isset($context["idb"]) ? $context["idb"] : $this->getContext($context, "idb")))), "html", null, true);
        echo "\" method=\"post\"><input type=\"hidden\" name=\"lang\" value=\"en\">
\t\t
\t\t\t<input type=submit value=\" Continue Shopping \" class=\"btn btn-default btn-md btn-gradient\"/>
\t\t</form>
\t\t</div>
<div class=\"pull-left\">
    
    <button data-sc-key=\"sbpb_YjU0MWNjZTAtMDliNS00ODg1LTg5YzEtYWExN2NhYjBhZWM5\"
        data-name=\"Tunisia Mall\"
        data-description=\"purchased by ";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " \"
        data-reference=\"99999\"
        data-amount=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["Total"]) ? $context["Total"] : $this->getContext($context, "Total")), "html", null, true);
        echo "\"
        data-color=\"#0000FF\"
        class=\"btn btn-primary btn-md\"
        >
        Buy Now
    </button>
    
\t\t</div>
\t<div class=\"separator clear\"></div>
\t<br/>
<div class=\"clear\"></div>
<br/><br/>
\t\t
\t\t</div> 
\t";
    }

    public function getTemplateName()
    {
        return "TMallClientBundle:Default:cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 75,  145 => 73,  133 => 64,  126 => 60,  112 => 53,  109 => 52,  107 => 51,  95 => 42,  91 => 41,  87 => 40,  83 => 39,  79 => 38,  70 => 33,  66 => 32,  37 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "TMallClientBundle::layout.html.twig"%}*/
/* {% block content %}*/
/*     {% set Total = 0 %}*/
/*      {% set idb = 0 %}*/
/* <div class="text-left no-left-padding col-md-9 min-height-300">*/
/* 		*/
/* 		*/
/* 	<div class="separator clear"></div>*/
/* 	<br/>*/
/* */
/* */
/* 	<div class="separator clear"></div>*/
/* 	<br/>*/
/* */
/* <B><i><h1 style="color: #08c">Your Products :</h1></i></B>*/
/* </br>*/
/* */
/* <div class="table-responsive">*/
/* <table class="table table-bordered table-striped">*/
/*   <thead>*/
/* 	  <tr>*/
/* 		*/
/* 		<th>Product</th>*/
/*         <th>Price</th>*/
/* 		<th>Quantity</th>*/
/* 		<th>Total</th>*/
/*                 <th>Remove</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/*           */
/*             {% for panier in paniers %}*/
/* 	<form action="{{ path('t_mall_client_ajouter', { 'id' : panier.id }) }}" method="get">*/
/*             */
/* 		  */
/* 	<tr>*/
/* 		*/
/* 		<td>{{ panier.ID_P.titre }}</td>*/
/*                 <td>{{ panier.ID_P.prix }}</td>	*/
/*                 <td>{{panier.Qte}}</td>*/
/*          <td>{{ panier.ID_P.prix*panier.Qte }}</td>*/
/* 	<td><a class="btn btn-default" href="{{ path('t_mall_client_supprimer', { 'id' : panier.id }) }}">remove</a></td>*/
/*         </tr>*/
/* 	  */
/* 	*/
/* 	*/
/* 			*/
/* 		*/
/* 		</form>  */
/*             */
/*             {% set Total = Total + (panier.ID_P.prix *panier.Qte) %}*/
/*              {% set idb = panier.ID_P.boutique.id%}*/
/*             {% endfor %} */
/* 	</tbody>*/
/* </table>*/
/* */
/* */
/* </div>*/
/* */
/* <span class="price_style pull-left">Total à payer : {{Total}} € </span>*/
/*   */
/* <div class="clear"></div>*/
/* <br><br>*/
/* <div class="r-margin-18 pull-left"><form action="{{path('t_mall_client_home',{'id':idb})}}" method="post"><input type="hidden" name="lang" value="en">*/
/* 		*/
/* 			<input type=submit value=" Continue Shopping " class="btn btn-default btn-md btn-gradient"/>*/
/* 		</form>*/
/* 		</div>*/
/* <div class="pull-left">*/
/*     */
/*     <button data-sc-key="sbpb_YjU0MWNjZTAtMDliNS00ODg1LTg5YzEtYWExN2NhYjBhZWM5"*/
/*         data-name="Tunisia Mall"*/
/*         data-description="purchased by {{ app.user.username }} "*/
/*         data-reference="99999"*/
/*         data-amount="{{Total}}"*/
/*         data-color="#0000FF"*/
/*         class="btn btn-primary btn-md"*/
/*         >*/
/*         Buy Now*/
/*     </button>*/
/*     */
/* 		</div>*/
/* 	<div class="separator clear"></div>*/
/* 	<br/>*/
/* <div class="clear"></div>*/
/* <br/><br/>*/
/* 		*/
/* 		</div> */
/* 	{% endblock %}*/
/* */
