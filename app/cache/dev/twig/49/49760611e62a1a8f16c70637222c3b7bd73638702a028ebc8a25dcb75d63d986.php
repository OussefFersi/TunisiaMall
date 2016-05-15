<?php

/* TMallVendorBundle:Default:pdf.html.twig */
class __TwigTemplate_08050085162eca81339780d0d96baa7eb3dfd9f25fc4f1bcfd0fbf222175360d extends Twig_Template
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
        echo "::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::Your Bill:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: <br/>

 Name Product:<td> ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "idProduit", array()), "getTitre", array(), "method"), "html", null, true);
        echo " </td> <br/>
--------------------------------------------------------------------------------------------------------------------------------------------
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Name Client:  <td> ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "idUser", array()), "getNom", array(), "method"), "html", null, true);
        echo " </td> <br/>
--------------------------------------------------------------------------------------------------------------------------------------------
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   Date: <td>   ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "date", array()), "d/m/Y"), "html", null, true);
        echo "   </td><br/>
--------------------------------------------------------------------------------------------------------------------------------------------
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   Price: <td>   ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "prix", array()), "html", null, true);
        echo "   </td><br/>
--------------------------------------------------------------------------------------------------------------------------------------------
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   Quantity: <td>   ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "quantite", array()), "html", null, true);
        echo "   </td><br/>
-------------------------------------------------------------------------------------------------------------------------------------------- 
";
    }

    public function getTemplateName()
    {
        return "TMallVendorBundle:Default:pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  38 => 9,  33 => 7,  28 => 5,  23 => 3,  19 => 1,);
    }
}
/* ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::Your Bill:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: <br/>*/
/* */
/*  Name Product:<td> {{commande.idProduit.getTitre()}} </td> <br/>*/
/* --------------------------------------------------------------------------------------------------------------------------------------------*/
/* &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Name Client:  <td> {{commande.idUser.getNom()}} </td> <br/>*/
/* --------------------------------------------------------------------------------------------------------------------------------------------*/
/* &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   Date: <td>   {{commande.date|date('d/m/Y')}}   </td><br/>*/
/* --------------------------------------------------------------------------------------------------------------------------------------------*/
/* &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   Price: <td>   {{commande.prix}}   </td><br/>*/
/* --------------------------------------------------------------------------------------------------------------------------------------------*/
/* &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   Quantity: <td>   {{commande.quantite}}   </td><br/>*/
/* -------------------------------------------------------------------------------------------------------------------------------------------- */
/* */
