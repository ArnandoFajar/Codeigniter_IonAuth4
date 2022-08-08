<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

$routes->add('auth/login', 'Auth::login', ["filter" => "checkuser"]); // filter
$routes->get('logout', 'Auth::logout');
$routes->add('forgot_password', 'Auth::forgot_password');
$routes->add('auth/forgot_password', 'Auth::forgot_password'); // route add gabungan Post dan Get
$routes->get('auth/reset_password/(:any)', 'Auth::reset_password/$1');
$routes->post('auth/reset_password/(:any)', 'Auth::reset_password/$1');

$routes->group('auth', ["filter" => "checkauth"], function ($routes) {
    $routes->get('/', 'Auth::index');
    $routes->add('create_user', 'Auth::create_user');
    $routes->add('edit_user/(:num)', 'Auth::edit_user/$1');
    $routes->add('edit_group/(:num)', 'Auth::edit_group/$1');
    $routes->add('create_group', 'Auth::create_group', ["filter" => "admin"]);
    $routes->get('activate/(:num)', 'Auth::activate/$1');
    $routes->get('activate/(:num)/(:hash)', 'Auth::activate/$1/$2');
    $routes->add('deactivate/(:num)', 'Auth::deactivate/$1');
    $routes->get('reset_password/(:hash)', 'Auth::reset_password/$1');
    $routes->post('reset_password/(:hash)', 'Auth::reset_password/$1');
    $routes->get('check', 'auth::checkgroup');
});

$routes->get('admin', "Home::index", ["filter" => "admin"]);
$routes->get('member', "Home::member");

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
