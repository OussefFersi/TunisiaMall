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

        // t_mall_client_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 't_mall_client_homepage')), array (  '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::testAction',));
        }

        // t_mall_client_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 't_mall_client_home');
            }

            return array (  '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::indexAction',  '_route' => 't_mall_client_home',);
        }

        // t_mall_client_create_store
        if ($pathinfo === '/create_store') {
            return array (  '_controller' => 'TMall\\ClientBundle\\Controller\\DefaultController::create_storeAction',  '_route' => 't_mall_client_create_store',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
