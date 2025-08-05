<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/admin', 'Pages::index');
$routes->get('/admin/(:any)', 'Pages::view/$1');
$routes->match(['get', 'post'], 'news/create', 'News::create');
