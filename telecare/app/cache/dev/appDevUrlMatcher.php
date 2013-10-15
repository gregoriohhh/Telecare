<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // persistenciapersistencia_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'persistenciapersistencia_homepage')), array (  '_controller' => 'Persistencia\\persistenciaBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/contacto')) {
            // contacto
            if (rtrim($pathinfo, '/') === '/contacto') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_contacto;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'contacto');
                }

                return array (  '_controller' => 'Persistencia\\persistenciaBundle\\Controller\\ContactoController::indexAction',  '_route' => 'contacto',);
            }
            not_contacto:

            // contacto_create
            if ($pathinfo === '/contacto/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_contacto_create;
                }

                return array (  '_controller' => 'Persistencia\\persistenciaBundle\\Controller\\ContactoController::createAction',  '_route' => 'contacto_create',);
            }
            not_contacto_create:

            // contacto_new
            if ($pathinfo === '/contacto/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_contacto_new;
                }

                return array (  '_controller' => 'Persistencia\\persistenciaBundle\\Controller\\ContactoController::newAction',  '_route' => 'contacto_new',);
            }
            not_contacto_new:

            // contacto_show
            if (preg_match('#^/contacto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_contacto_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contacto_show')), array (  '_controller' => 'Persistencia\\persistenciaBundle\\Controller\\ContactoController::showAction',));
            }
            not_contacto_show:

            // contacto_edit
            if (preg_match('#^/contacto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_contacto_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contacto_edit')), array (  '_controller' => 'Persistencia\\persistenciaBundle\\Controller\\ContactoController::editAction',));
            }
            not_contacto_edit:

            // contacto_update
            if (preg_match('#^/contacto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_contacto_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contacto_update')), array (  '_controller' => 'Persistencia\\persistenciaBundle\\Controller\\ContactoController::updateAction',));
            }
            not_contacto_update:

            // contacto_delete
            if (preg_match('#^/contacto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_contacto_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contacto_delete')), array (  '_controller' => 'Persistencia\\persistenciaBundle\\Controller\\ContactoController::deleteAction',));
            }
            not_contacto_delete:

        }

        if (0 === strpos($pathinfo, '/especialista')) {
            // especialista
            if (rtrim($pathinfo, '/') === '/especialista') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_especialista;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'especialista');
                }

                return array (  '_controller' => 'Persistencia\\persistenciaBundle\\Controller\\especialistaController::indexAction',  '_route' => 'especialista',);
            }
            not_especialista:

            // especialista_create
            if ($pathinfo === '/especialista/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_especialista_create;
                }

                return array (  '_controller' => 'Persistencia\\persistenciaBundle\\Controller\\especialistaController::createAction',  '_route' => 'especialista_create',);
            }
            not_especialista_create:

            // especialista_new
            if ($pathinfo === '/especialista/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_especialista_new;
                }

                return array (  '_controller' => 'Persistencia\\persistenciaBundle\\Controller\\especialistaController::newAction',  '_route' => 'especialista_new',);
            }
            not_especialista_new:

            // especialista_show
            if (preg_match('#^/especialista/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_especialista_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'especialista_show')), array (  '_controller' => 'Persistencia\\persistenciaBundle\\Controller\\especialistaController::showAction',));
            }
            not_especialista_show:

            // especialista_edit
            if (preg_match('#^/especialista/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_especialista_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'especialista_edit')), array (  '_controller' => 'Persistencia\\persistenciaBundle\\Controller\\especialistaController::editAction',));
            }
            not_especialista_edit:

            // especialista_update
            if (preg_match('#^/especialista/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_especialista_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'especialista_update')), array (  '_controller' => 'Persistencia\\persistenciaBundle\\Controller\\especialistaController::updateAction',));
            }
            not_especialista_update:

            // especialista_delete
            if (preg_match('#^/especialista/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_especialista_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'especialista_delete')), array (  '_controller' => 'Persistencia\\persistenciaBundle\\Controller\\especialistaController::deleteAction',));
            }
            not_especialista_delete:

        }

        if (0 === strpos($pathinfo, '/paciente')) {
            // paciente
            if (rtrim($pathinfo, '/') === '/paciente') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_paciente;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'paciente');
                }

                return array (  '_controller' => 'Persistencia\\persistenciaBundle\\Controller\\pacienteController::indexAction',  '_route' => 'paciente',);
            }
            not_paciente:

            // paciente_create
            if ($pathinfo === '/paciente/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_paciente_create;
                }

                return array (  '_controller' => 'Persistencia\\persistenciaBundle\\Controller\\pacienteController::createAction',  '_route' => 'paciente_create',);
            }
            not_paciente_create:

            // paciente_new
            if ($pathinfo === '/paciente/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_paciente_new;
                }

                return array (  '_controller' => 'Persistencia\\persistenciaBundle\\Controller\\pacienteController::newAction',  '_route' => 'paciente_new',);
            }
            not_paciente_new:

            // paciente_show
            if (preg_match('#^/paciente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_paciente_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'paciente_show')), array (  '_controller' => 'Persistencia\\persistenciaBundle\\Controller\\pacienteController::showAction',));
            }
            not_paciente_show:

            // paciente_edit
            if (preg_match('#^/paciente/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_paciente_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'paciente_edit')), array (  '_controller' => 'Persistencia\\persistenciaBundle\\Controller\\pacienteController::editAction',));
            }
            not_paciente_edit:

            // paciente_update
            if (preg_match('#^/paciente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_paciente_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'paciente_update')), array (  '_controller' => 'Persistencia\\persistenciaBundle\\Controller\\pacienteController::updateAction',));
            }
            not_paciente_update:

            // paciente_delete
            if (preg_match('#^/paciente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_paciente_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'paciente_delete')), array (  '_controller' => 'Persistencia\\persistenciaBundle\\Controller\\pacienteController::deleteAction',));
            }
            not_paciente_delete:

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
