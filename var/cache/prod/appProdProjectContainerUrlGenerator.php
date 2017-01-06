<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'addBook' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\BookController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/book/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editBook' => array (  0 =>   array (    0 => 'book_id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\BookController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'book_id',    ),    1 =>     array (      0 => 'text',      1 => '/book/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'showBook' => array (  0 =>   array (    0 => 'book_id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\BookController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'book_id',    ),    1 =>     array (      0 => 'text',      1 => '/book/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listAction' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\BookController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/book/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deleteBook' => array (  0 =>   array (    0 => 'book_id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\BookController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'book_id',    ),    1 =>     array (      0 => 'text',      1 => '/book/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CategoryController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/category/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CategoryController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/category/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CategoryController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CategoryController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CategoryController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
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
