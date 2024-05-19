<?php

// use CodeIgniter\Router\RouteCollection;

// /**
//  * @var RouteCollection $routes
//  */
// $routes->get('/', 'Home::index');

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('PostController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'PostController::index');


$routes->get('count/dashboard', 'Controller_dashboard::countDashboard');


$routes->get('/Category-product', 'Controller_category_product::index');
$routes->get('/Product', 'PostController::products_inds');
$routes->get('/list-seller', 'Controller_list_seller::index');

// $routes->get('/login', 'Home::login');
// $routes->get('/register', 'Register::index');

$routes->get('/product-list', 'PostController::productList');
$routes->post('/product/detail_load', 'Controller_dashboard::retriveProduct');
$routes->get('/product-detail', 'PostController::productDetail');

$routes->get('/formtoseller', 'PostController::formtoseller');

$routes->get('/users', 'PostController::userIndexs');

$routes->post('postseller/add', 'PostController::addseller');

$routes->post('post/add', 'PostController::add');
$routes->get('post/fetch', 'PostController::fetch');
$routes->get('post/fetch_main', 'Controller_dashboard::fetch_main');
$routes->get('post/edit/(:num)', 'PostController::edit/$1');
$routes->get('post/delete/(:num)', 'PostController::delete/$1');
$routes->get('post/detail/(:num)', 'PostController::detail/$1');
$routes->post('post/update', 'PostController::update');

// $routes->get('/', 'Register::index', ['filter' => 'guestFilter']);
$routes->get('/Dashboard', 'Controller_dashboard::index', ['filter' => 'authFilter']);
$routes->get('/register', 'Register::index', ['filter' => 'guestFilter']);
$routes->post('/register', 'Register::register', ['filter' => 'guestFilter']);
 
$routes->get('/login', 'Login::index', ['filter' => 'guestFilter']);
$routes->post('/login', 'Login::authenticate', ['filter' => 'guestFilter']);
 
$routes->get('/logout', 'Login::logout', ['filter' => 'authFilter']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
