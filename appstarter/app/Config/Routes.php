<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/Dashboard', 'Controller_dashboard::index');
$routes->get('/Category-product', 'Controller_category_product::index');
$routes->get('/Product', 'Controller_product::index');
$routes->get('/list-seller', 'Controller_list_seller::index');

