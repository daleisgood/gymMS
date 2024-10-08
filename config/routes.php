<?php
/**
 * Routes configuration.
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * It's loaded within the context of `Application::routes()` method which
 * receives a `RouteBuilder` instance `$routes` as method argument.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;
use App\Controller\AdminController;

/*
 * This file is loaded in the context of the `Application` class.
  * So you can use  `$this` to reference the application class instance
  * if required.
 */
return function (RouteBuilder $routes): void {

    $routes->connect('/login', ['controller' => 'Users', 'action' => 'login']);
$routes->connect('/logout', ['controller' => 'Users', 'action' => 'logout']);

    $routes->scope('/admin', function (RouteBuilder $builder) {
        $builder->connect('/', ['controller' => 'Admin', 'action' => 'dashboard']);
        $builder->connect('/users', ['controller' => 'Admin', 'action' => 'users']);
        $builder->connect('/sessions', ['controller' => 'Admin', 'action' => 'sessions']);
        $builder->connect('/trainers', ['controller' => 'Admin', 'action' => 'trainers']);
        $builder->connect('/equipment', ['controller' => 'Admin', 'action' => 'equipment']);
        $builder->connect('/addUser', ['controller' => 'Admin', 'action' => 'addUser']);
        $builder->connect('/addSession', ['controller' => 'Admin', 'action' => 'addSession']);
        $builder->connect('/addTrainer', ['controller' => 'Admin', 'action' => 'addTrainer']);
        $builder->connect('/addEquipment', ['controller' => 'Admin', 'action' => 'addEquipment']);
    });
    $routes->setRouteClass(DashedRoute::class);
    $routes->connect('/trainers', ['controller' => 'Pages', 'action' => 'trainers']);
    $routes->connect('/sessions', ['controller' => 'Pages', 'action' => 'sessions']);
    $routes->scope('/', function (RouteBuilder $builder): void {
        
        $builder->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
        
        /*
         * ...and connect the rest of 'Pages' controller's URLs.
         */
        $builder->connect('/pages/*', 'Pages::display');

        $builder->fallbacks();
    });

};
