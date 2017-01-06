<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/book')) {
            // addBook
            if ($pathinfo === '/book/add') {
                return array (  '_controller' => 'AppBundle\\Controller\\BookController::createAction',  '_route' => 'addBook',);
            }

            // editBook
            if (0 === strpos($pathinfo, '/book/update') && preg_match('#^/book/update/(?P<book_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editBook')), array (  '_controller' => 'AppBundle\\Controller\\BookController::updateAction',));
            }

            // showBook
            if (0 === strpos($pathinfo, '/book/show') && preg_match('#^/book/show/(?P<book_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'showBook')), array (  '_controller' => 'AppBundle\\Controller\\BookController::showAction',));
            }

            // listAction
            if (rtrim($pathinfo, '/') === '/book') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'listAction');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\BookController::indexAction',  '_route' => 'listAction',);
            }

            // deleteBook
            if (0 === strpos($pathinfo, '/book/delete') && preg_match('#^/book/delete/(?P<book_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteBook')), array (  '_controller' => 'AppBundle\\Controller\\BookController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/category')) {
            // category_index
            if (rtrim($pathinfo, '/') === '/category') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_category_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'category_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::indexAction',  '_route' => 'category_index',);
            }
            not_category_index:

            // category_new
            if ($pathinfo === '/category/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_category_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::newAction',  '_route' => 'category_new',);
            }
            not_category_new:

            // category_show
            if (preg_match('#^/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_category_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_show')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::showAction',));
            }
            not_category_show:

            // category_edit
            if (preg_match('#^/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_category_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_edit')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::editAction',));
            }
            not_category_edit:

            // category_delete
            if (preg_match('#^/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_category_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_delete')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::deleteAction',));
            }
            not_category_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
