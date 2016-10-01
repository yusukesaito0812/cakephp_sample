<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::scope(
    '/questionnaires',
    ['controller' => 'Questionnaires'],
    function (RouteBuilder $routes) {
        $routes->connect('/add/*', ['action' => 'add']);
        $routes->connect('/view/*', ['action' => 'view']);
        $routes->connect('/edit/*', ['action' => 'edit']);
        $routes->connect('/delete/*', ['action' => 'delete']);
    }
);

Router::scope(
    '/users',
    ['plugin' => 'CakeDC/Users','controller' => 'Users'],
        //viewはvendor/cakedc以下のフォルダに入っています
    function (RouteBuilder $routes) {
        $routes->connect('/add/*', ['action' => 'add']);
        $routes->connect('/view/*', ['action' => 'view']);
        $routes->connect('/edit/*', ['action' => 'edit']);
        $routes->connect('/delete/*', ['action' => 'delete']);
        $routes->connect('/*', ['action' => 'index']);
    }
);

Router::scope(
    '/categories',
    ['controller' => 'Categories'],
    function (RouteBuilder $routes) {
        $routes->connect('/add/*', ['action' => 'add']);
        $routes->connect('/view/*', ['action' => 'view']);
        $routes->connect('/edit/*', ['action' => 'edit']);
        $routes->connect('/delete/*', ['action' => 'delete']);
    }
);

Router::scope(
    '/pages',
    ['controller' => 'Pages'],
    function (RouteBuilder $routes) {
        $routes->connect('/company/*', ['action' => 'company']);
        $routes->connect('/*', ['action' => 'display']);
    }
);
Router::scope('/', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Questionnaires', 'action' => 'stresscheck']);
    $routes->fallbacks('DashedRoute');
});

/**
 * Load all plugin routes.  See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */
Plugin::routes();
