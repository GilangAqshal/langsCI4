<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// base url  ->  panggil controller -> panggil method 
// localhost:8080/controller/method

$routes->setAutoRoute(true);
// $routes->get('/', 'Home::index');

$routes->get('/', 'Pages::index');
$routes->get('pages/about', 'Pages::about');

// belajar segment
$routes->get('/coba/index','Coba::index');
$routes->get('/coba/(:any)/(:num)', 'Coba::about/$1/$2');
// belajar controller folder 
$routes->get('/users', 'Admin\users::index');
$routes->get('/user/badmin', 'Admin\users::badmin');