<?php
  /**
   * @file
   * Conatins \Drupal\hello_drupal8\Routing\ExampleRoutes
   */
namespace Drupal\hello_drupal8\Routing;

use Symfony\Component\Routing\Route;

/**
 * Defines dynamic routes.
 */
class ExampleRoutes {

  /**
   * {@inheritdoc}
   */
  public function routes(){
    $routes = array();
    // Declares a single route under the name 'example.content'.
    // Returns an array of Route objects. 
    $routes['example.content'] = new Route(
      // Path to attach this route to:
      '/example',
      // Route defaults:
      array(
        '_controller' => '\Drupal\hello_drupal8\Controller\SayHelloToDrupal8::content',
        '_title' => 'Hello2'
      ),
      // Route requirements:
      [
        '_permission'  => 'access content',
      ]
    );
    return $routes;
  }

}

