<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Login::index');
$routes->post('/login/proses', 'Login::proses');
$routes->get('/logout', 'Login::logout');
// ✅ Lindungi semua rute layanan dengan filter 'auth'
$routes->group('layanan', ['filter' => 'auth'], function ($routes) {
    $routes->get('/', 'Layanan::index');
    $routes->get('create', 'Layanan::create');
    $routes->post('store', 'Layanan::store');
    $routes->get('edit/(:num)', 'Layanan::edit/$1');
    $routes->post('update/(:num)', 'Layanan::update/$1');
    $routes->get('delete/(:num)', 'Layanan::delete/$1');
});
