<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/account')) {
            // app_account_get
            if (preg_match('#^/account/(?P<accountName>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_app_account_get;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_account_get')), array (  '_controller' => 'AppBundle\\Controller\\AccountController::getAction',));
            }
            not_app_account_get:

            // app_account_post
            if ('/account/' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_app_account_post;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AccountController::postAction',  '_route' => 'app_account_post',);
            }
            not_app_account_post:

            // app_account_put
            if ('/account/' === $pathinfo) {
                if ('PUT' !== $canonicalMethod) {
                    $allow[] = 'PUT';
                    goto not_app_account_put;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AccountController::putAction',  '_route' => 'app_account_put',);
            }
            not_app_account_put:

            // app_account_delete
            if ('/account/' === $pathinfo) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_app_account_delete;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AccountController::deleteAction',  '_route' => 'app_account_delete',);
            }
            not_app_account_delete:

        }

        elseif (0 === strpos($pathinfo, '/agent')) {
            // app_agent_get
            if ('/agent' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_app_agent_get;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'app_agent_get');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AgentController::getAction',  '_route' => 'app_agent_get',);
            }
            not_app_agent_get:

            // app_agent_post
            if ('/agent/' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_app_agent_post;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AgentController::postAction',  '_route' => 'app_agent_post',);
            }
            not_app_agent_post:

            // app_agent_put
            if ('/agent/' === $pathinfo) {
                if ('PUT' !== $canonicalMethod) {
                    $allow[] = 'PUT';
                    goto not_app_agent_put;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AgentController::putAction',  '_route' => 'app_agent_put',);
            }
            not_app_agent_put:

            // app_agent_delete
            if ('/agent/' === $pathinfo) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_app_agent_delete;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AgentController::deleteAction',  '_route' => 'app_agent_delete',);
            }
            not_app_agent_delete:

        }

        elseif (0 === strpos($pathinfo, '/cdr')) {
            // app_cdr_get
            if (preg_match('#^/cdr/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_app_cdr_get;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_cdr_get')), array (  '_controller' => 'AppBundle\\Controller\\CdrController::getAction',));
            }
            not_app_cdr_get:

            // app_cdr_post
            if (preg_match('#^/cdr/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_app_cdr_post;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_cdr_post')), array (  '_controller' => 'AppBundle\\Controller\\CdrController::postAction',));
            }
            not_app_cdr_post:

            // app_cdr_put
            if (preg_match('#^/cdr/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                if ('PUT' !== $canonicalMethod) {
                    $allow[] = 'PUT';
                    goto not_app_cdr_put;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_cdr_put')), array (  '_controller' => 'AppBundle\\Controller\\CdrController::putAction',));
            }
            not_app_cdr_put:

            // app_cdr_delete
            if (preg_match('#^/cdr/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_app_cdr_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_cdr_delete')), array (  '_controller' => 'AppBundle\\Controller\\CdrController::deleteAction',));
            }
            not_app_cdr_delete:

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
