<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('register', 'Auth::register');
$routes->post('register', 'Auth::processRegister');

$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::processLogin');

$routes->get('logout', 'Auth::logout');

$routes->get('dashboard', function () {
    if (!session()->get('isLoggedIn')) {
        return redirect()->to('/login');
    }
    return "歡迎，" . session()->get('username') . "！<br><a href='/logout'>登出</a>";
});

$routes->get('/admin', 'Pages::index');
$routes->get('/admin/(:any)', 'Pages::view/$1');
$routes->match(['get', 'post'], 'news/create', 'News::create');
