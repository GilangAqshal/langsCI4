<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// base url  ->  panggil controller -> panggil method 
// localhost:8080/controller/method

$routes->setAutoRoute(true);
// $routes->get('/', 'Home::index');
$routes->get('/', 'Home::index');
$routes->get('/coba/index','Coba::index');
$routes->get('/coba/(:any)/(:num)', 'Coba::about/$1/$2');

$routes->get('/users', 'Admin\users::index');