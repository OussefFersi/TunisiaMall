<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // t_mall_entity_homepage
        if (0 === strpos($pathinfo, '/e/hello') && preg_match('#^/e/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 't_mall_entity_homepage')), array (  '_controller' => 'TMall\\EntityBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/vendor')) {
            // t_mall_vendor_homepage
            if (rtrim($pathinfo, '/') === '/vendor') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 't_mall_vendor_homepage');
                }

                return array (  '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::indexAction',  '_route' => 't_mall_vendor_homepage',);
            }

            if (0 === strpos($pathinfo, '/vendor/product')) {
                if (0 === strpos($pathinfo, '/vendor/product1')) {
                    // produit
                    if (0 === strpos($pathinfo, '/vendor/product1/list') && preg_match('#^/vendor/product1/list/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit')), array (  '_controller' => 'TMall\\VendorBundle\\Controller\\produitController::indexAction',));
                    }

                    // produit_show
                    if (preg_match('#^/vendor/product1/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_show')), array (  '_controller' => 'TMall\\VendorBundle\\Controller\\produitController::showAction',));
                    }

                    // produit_new
                    if (0 === strpos($pathinfo, '/vendor/product1/new') && preg_match('#^/vendor/product1/new/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_new')), array (  '_controller' => 'TMall\\VendorBundle\\Controller\\produitController::newAction',));
                    }

                    // produit_create
                    if ($pathinfo === '/vendor/product1/create') {
                        if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                            goto not_produit_create;
                        }

                        return array (  '_controller' => 'TMall\\VendorBundle\\Controller\\produitController::createAction',  '_route' => 'produit_create',);
                    }
                    not_produit_create:

                    // produit_edit
                    if (preg_match('#^/vendor/product1/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_edit')), array (  '_controller' => 'TMall\\VendorBundle\\Controller\\produitController::editAction',));
                    }

                    // produit_update
                    if (preg_match('#^/vendor/product1/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_produit_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_update')), array (  '_controller' => 'TMall\\VendorBundle\\Controller\\produitController::updateAction',));
                    }
                    not_produit_update:

                    // produit_delete
                    if (preg_match('#^/vendor/product1/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_produit_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_delete')), array (  '_controller' => 'TMall\\VendorBundle\\Controller\\produitController::deleteAction',));
                    }
                    not_produit_delete:

                    // produit_recherche
                    if ($pathinfo === '/vendor/product1/recherche') {
                        return array (  '_controller' => 'TMall\\VendorBundle\\Controller\\produitController::recherchetraitementAction',  '_route' => 'produit_recherche',);
                    }

                }

                // t_mall_vendor_products
                if ($pathinfo === '/vendor/products') {
                    return array (  '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::productsAction',  '_route' => 't_mall_vendor_products',);
                }

            }

            // t_mall_vendor_approve
            if ($pathinfo === '/vendor/approve') {
                return array (  '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::listOrdersAction',  '_route' => 't_mall_vendor_approve',);
            }

            // t_mall_vendor_rejected
            if ($pathinfo === '/vendor/rejected') {
                return array (  '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::rejectedAction',  '_route' => 't_mall_vendor_rejected',);
            }

            if (0 === strpos($pathinfo, '/vendor/a')) {
                // t_mall_vendor_approved
                if ($pathinfo === '/vendor/approved') {
                    return array (  '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::approvedAction',  '_route' => 't_mall_vendor_approved',);
                }

                // t_mall_vendor_addOrder
                if ($pathinfo === '/vendor/addOrder') {
                    return array (  '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::addOrderAction',  '_route' => 't_mall_vendor_addOrder',);
                }

            }

            // t_mall_vendor_listOrders
            if ($pathinfo === '/vendor/listOrders') {
                return array (  '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::listOrdersAction',  '_route' => 't_mall_vendor_listOrders',);
            }

            // tmall_vendor_approveOrder
            if ($pathinfo === '/vendor/approve') {
                return array (  '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::approveAction',  '_route' => 'tmall_vendor_approveOrder',);
            }

            // tmall_vendor_editOrder
            if (preg_match('#^/vendor/(?P<id>[^/]++)/editOrder$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tmall_vendor_editOrder')), array (  '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::editOrderAction',));
            }

            // tmall_vendor_rejectOrder
            if (0 === strpos($pathinfo, '/vendor/supprimerOrder') && preg_match('#^/vendor/supprimerOrder/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tmall_vendor_rejectOrder')), array (  '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::supprimerOrderAction',));
            }

            // tmall_vendor_affirmOrder
            if (0 === strpos($pathinfo, '/vendor/affirmerOrder') && preg_match('#^/vendor/affirmerOrder/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tmall_vendor_affirmOrder')), array (  '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::affirmerOrderAction',));
            }

            // tmall_vendor_showPDF
            if (preg_match('#^/vendor/(?P<id>[^/]++)/showPDF$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tmall_vendor_showPDF')), array (  '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::showPDFAction',));
            }

            // t_mall_vendor_addCoupons
            if ($pathinfo === '/vendor/coupons') {
                return array (  '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::addCouponAction',  '_route' => 't_mall_vendor_addCoupons',);
            }

            // tmall_vendor_rejectCoupon
            if (0 === strpos($pathinfo, '/vendor/rejectCoupon') && preg_match('#^/vendor/rejectCoupon/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tmall_vendor_rejectCoupon')), array (  '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::rejectCouponAction',));
            }

            // tmall_vendor_listCoupon
            if ($pathinfo === '/vendor/listCoupon') {
                return array (  '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::listCouponsAction',  '_route' => 'tmall_vendor_listCoupon',);
            }

            // tmall_vendor_deleteOrder
            if (0 === strpos($pathinfo, '/vendor/deleteOrder') && preg_match('#^/vendor/deleteOrder/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tmall_vendor_deleteOrder')), array (  '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::deleteOrderAction',));
            }

            // tmall_vendor_MyStores
            if ($pathinfo === '/vendor/myStores') {
                return array (  '_controller' => 'TMall\\VendorBundle\\Controller\\DefaultController::mystoresAction',  '_route' => 'tmall_vendor_MyStores',);
            }

            // t_mall_client_listBoutique
            if ($pathinfo === '/vendor/createstore') {
                return array (  '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::create_storeAction',  '_route' => 't_mall_client_listBoutique',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // tmall_admin_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tmall_admin_homepage');
                }

                return array (  '_controller' => 'Tmall\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'tmall_admin_homepage',);
            }

            // productslist
            if ($pathinfo === '/admin/productslist') {
                return array (  '_controller' => 'Tmall\\AdminBundle\\Controller\\DefaultController::listProductAction',  '_route' => 'productslist',);
            }

            // boutiqueslist
            if ($pathinfo === '/admin/boutiqueslist') {
                return array (  '_controller' => 'Tmall\\AdminBundle\\Controller\\BoutiqueController::indexAction',  '_route' => 'boutiqueslist',);
            }

            // e-commerce
            if ($pathinfo === '/admin/ecommerce') {
                return array (  '_controller' => 'Tmall\\AdminBundle\\Controller\\DefaultController::ecommerceAction',  '_route' => 'e-commerce',);
            }

            if (0 === strpos($pathinfo, '/admin/utilisateur')) {
                // utilisateur
                if (rtrim($pathinfo, '/') === '/admin/utilisateur') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'utilisateur');
                    }

                    return array (  '_controller' => 'Tmall\\AdminBundle\\Controller\\UtilisateurController::indexAction',  '_route' => 'utilisateur',);
                }

                // utilisateur_show
                if (preg_match('#^/admin/utilisateur/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_show')), array (  '_controller' => 'Tmall\\AdminBundle\\Controller\\UtilisateurController::showAction',));
                }

                // utilisateur_new
                if ($pathinfo === '/admin/utilisateur/new') {
                    return array (  '_controller' => 'Tmall\\AdminBundle\\Controller\\UtilisateurController::newAction',  '_route' => 'utilisateur_new',);
                }

                // utilisateur_create
                if ($pathinfo === '/admin/utilisateur/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_utilisateur_create;
                    }

                    return array (  '_controller' => 'Tmall\\AdminBundle\\Controller\\UtilisateurController::createAction',  '_route' => 'utilisateur_create',);
                }
                not_utilisateur_create:

                // utilisateur_edit
                if (preg_match('#^/admin/utilisateur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_edit')), array (  '_controller' => 'Tmall\\AdminBundle\\Controller\\UtilisateurController::editAction',));
                }

                // utilisateur_update
                if (preg_match('#^/admin/utilisateur/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_utilisateur_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_update')), array (  '_controller' => 'Tmall\\AdminBundle\\Controller\\UtilisateurController::updateAction',));
                }
                not_utilisateur_update:

                // utilisateur_delete
                if (preg_match('#^/admin/utilisateur/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_utilisateur_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_delete')), array (  '_controller' => 'Tmall\\AdminBundle\\Controller\\UtilisateurController::deleteAction',));
                }
                not_utilisateur_delete:

            }

            // boutique_delete
            if (preg_match('#^/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_boutique_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'boutique_delete')), array (  '_controller' => 'Tmall\\AdminBundle\\Controller\\BoutiqueController::deleteAction',));
            }
            not_boutique_delete:

            // product_delete
            if (preg_match('#^/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_product_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_delete')), array (  '_controller' => 'Tmall\\AdminBundle\\Controller\\DefaultController::deleteAction',));
            }
            not_product_delete:

        }

        if (0 === strpos($pathinfo, '/client')) {
            // t_mall_client_home
            if (0 === strpos($pathinfo, '/client/index') && preg_match('#^/client/index/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 't_mall_client_home')), array (  '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::indexAction',));
            }

            // t_mall_client_stores
            if ($pathinfo === '/client/stores') {
                return array (  '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::rechercheBoutiqueTraitementAction',  '_route' => 't_mall_client_stores',);
            }

            // t_mall_client_boutiqueDetail
            if ($pathinfo === '/client/detailBoutique') {
                return array (  '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::boutiqueDetailAction',  '_route' => 't_mall_client_boutiqueDetail',);
            }

            // t_mall_client_cordonate
            if (0 === strpos($pathinfo, '/client/cordonate') && preg_match('#^/client/cordonate/(?P<cordonne>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 't_mall_client_cordonate')), array (  '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::cordonateAction',));
            }

            // t_mall_client_rechercheBoutique
            if ($pathinfo === '/client/rechercheBoutique') {
                return array (  '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::rechercheBoutiqueAction',  '_route' => 't_mall_client_rechercheBoutique',);
            }

            if (0 === strpos($pathinfo, '/client/p')) {
                // t_mall_client_pdetails
                if (0 === strpos($pathinfo, '/client/productdetails') && preg_match('#^/client/productdetails/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 't_mall_client_pdetails')), array (  '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::pdetailsAction',));
                }

                // t_mall_pdf
                if ($pathinfo === '/client/pdf') {
                    return array (  '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::pdfgenratorAction',  '_route' => 't_mall_pdf',);
                }

            }

            // t_mall_client_ajouter
            if (0 === strpos($pathinfo, '/client/ajouter') && preg_match('#^/client/ajouter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 't_mall_client_ajouter')), array (  '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::ajouterAction',));
            }

            // t_mall_client_mail
            if ($pathinfo === '/client/envoyermail') {
                return array (  '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::envoyermailAction',  '_route' => 't_mall_client_mail',);
            }

            // t_mall_client_supprimer
            if (0 === strpos($pathinfo, '/client/supprimer') && preg_match('#^/client/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 't_mall_client_supprimer')), array (  '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::supprimerAction',));
            }

            // t_mall_client_cart
            if ($pathinfo === '/client/cart') {
                return array (  '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::cartAction',  '_route' => 't_mall_client_cart',);
            }

            // t_mall_client_aboutUs
            if ($pathinfo === '/client/aboutUs') {
                return array (  '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::aboutUsAction',  '_route' => 't_mall_client_aboutUs',);
            }

            // t_mall_client_contact_page
            if ($pathinfo === '/client/contact') {
                return array (  '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::contact_pageAction',  '_route' => 't_mall_client_contact_page',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // front
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'front');
            }

            return array (  '_controller' => 'Personne\\PersonneBundle\\Controller\\DefaultController::indexAction',  '_route' => 'front',);
        }

        if (0 === strpos($pathinfo, '/genemu_')) {
            // genemu_upload
            if ($pathinfo === '/genemu_upload') {
                return array (  '_controller' => 'Genemu\\Bundle\\FormBundle\\Controller\\UploadController::uploadAction',  '_route' => 'genemu_upload',);
            }

            // genemu_form_image
            if ($pathinfo === '/genemu_change_image') {
                return array (  '_controller' => 'Genemu\\Bundle\\FormBundle\\Controller\\ImageController::changeAction',  '_route' => 'genemu_form_image',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
