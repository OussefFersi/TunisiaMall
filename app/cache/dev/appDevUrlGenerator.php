<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        't_mall_entity_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'TMall\\EntityBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/e/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        't_mall_vendor_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/vendor/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TMall\\VendorBundle\\Controller\\produitController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/vendor/product1/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TMall\\VendorBundle\\Controller\\produitController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/vendor/product1',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_new' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TMall\\VendorBundle\\Controller\\produitController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/vendor/product1/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMall\\VendorBundle\\Controller\\produitController::createAction',  ),  2 =>   array (    '_method' => 'post|get',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/vendor/product1/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TMall\\VendorBundle\\Controller\\produitController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/vendor/product1',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TMall\\VendorBundle\\Controller\\produitController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/vendor/product1',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TMall\\VendorBundle\\Controller\\produitController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/vendor/product1',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_recherche' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMall\\VendorBundle\\Controller\\produitController::recherchetraitementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/vendor/product1/recherche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        't_mall_vendor_products' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::productsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/vendor/products',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        't_mall_vendor_approve' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::listOrdersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/vendor/approve',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        't_mall_vendor_rejected' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::rejectedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/vendor/rejected',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        't_mall_vendor_approved' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::approvedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/vendor/approved',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        't_mall_vendor_addOrder' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::addOrderAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/vendor/addOrder',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        't_mall_vendor_listOrders' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::listOrdersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/vendor/listOrders',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tmall_vendor_approveOrder' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::approveAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/vendor/approve',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tmall_vendor_editOrder' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::editOrderAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/editOrder',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/vendor',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tmall_vendor_rejectOrder' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::supprimerOrderAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/vendor/supprimerOrder',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tmall_vendor_affirmOrder' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::affirmerOrderAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/vendor/affirmerOrder',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tmall_vendor_showPDF' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::showPDFAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/showPDF',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/vendor',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        't_mall_vendor_addCoupons' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::addCouponAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/vendor/coupons',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tmall_vendor_rejectCoupon' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::rejectCouponAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/vendor/rejectCoupon',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tmall_vendor_listCoupon' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::listCouponsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/vendor/listCoupon',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tmall_vendor_deleteOrder' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::deleteOrderAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/vendor/deleteOrder',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tmall_vendor_MyStores' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::mystoresAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/vendor/myStores',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        't_mall_client_listBoutique' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::create_storeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/vendor/createstore',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tmall_admin_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Tmall\\AdminBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'productslist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Tmall\\AdminBundle\\Controller\\DefaultController::listProductAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/productslist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'boutiqueslist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Tmall\\AdminBundle\\Controller\\BoutiqueController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/boutiqueslist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'e-commerce' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Tmall\\AdminBundle\\Controller\\DefaultController::ecommerceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/ecommerce',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateur' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Tmall\\AdminBundle\\Controller\\UtilisateurController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/utilisateur/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateur_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Tmall\\AdminBundle\\Controller\\UtilisateurController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/utilisateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateur_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Tmall\\AdminBundle\\Controller\\UtilisateurController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/utilisateur/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateur_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Tmall\\AdminBundle\\Controller\\UtilisateurController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/utilisateur/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateur_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Tmall\\AdminBundle\\Controller\\UtilisateurController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/utilisateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateur_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Tmall\\AdminBundle\\Controller\\UtilisateurController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/utilisateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateur_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Tmall\\AdminBundle\\Controller\\UtilisateurController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/utilisateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'boutique_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Tmall\\AdminBundle\\Controller\\BoutiqueController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'product_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Tmall\\AdminBundle\\Controller\\DefaultController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        't_mall_client_home' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/client/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        't_mall_client_stores' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::rechercheBoutiqueTraitementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/stores',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        't_mall_client_boutiqueDetail' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::boutiqueDetailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/detailBoutique',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        't_mall_client_cordonate' => array (  0 =>   array (    0 => 'cordonne',  ),  1 =>   array (    '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::cordonateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'cordonne',    ),    1 =>     array (      0 => 'text',      1 => '/client/cordonate',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        't_mall_client_rechercheBoutique' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::rechercheBoutiqueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/rechercheBoutique',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        't_mall_client_pdetails' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::pdetailsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/client/productdetails',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        't_mall_pdf' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::pdfgenratorAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/pdf',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        't_mall_client_ajouter' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/client/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        't_mall_client_mail' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::envoyermailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/envoyermail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        't_mall_client_supprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/client/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        't_mall_client_cart' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::cartAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/cart',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        't_mall_client_aboutUs' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::aboutUsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/aboutUs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        't_mall_client_contact_page' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::contact_pageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'front' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Personne\\PersonneBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'genemu_upload' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Genemu\\Bundle\\FormBundle\\Controller\\UploadController::uploadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/genemu_upload',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'genemu_form_image' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Genemu\\Bundle\\FormBundle\\Controller\\ImageController::changeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/genemu_change_image',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_welcome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'acme_demo_secured_hello' => array (  0 =>   array (  ),  1 =>   array (    'name' => 'World',    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_secured_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/secured/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_secured_hello_admin' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/secured/hello/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
