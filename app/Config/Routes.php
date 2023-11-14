<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Bagian masyarakat
$routes->get('/', 'Masyarakat::index');
$routes->get('/masyarakat', 'Masyarakat::index');
$routes->get('/masyarakat/pengaduan', 'Masyarakat::form');
$routes->get('/masyarakat/laporan_anda', 'Masyarakat::laporan_anda');
$routes->get('/masyarakat/about_us', 'Masyarakat::About_us');
$routes->get('/masyarakat/profil', 'Masyarakat::Profile');
$routes->get('/masyarakat/complete', 'Masyarakat::Complete');
$routes->get('/masyarakat/detail', 'Masyarakat::detail');

// $routes->get('/masyarakat', 'User::index');

$routes->get('/login', 'Auth::login');
$routes->get('/register', 'Auth::register');
$routes->get('/logout', 'Auth::logout');
$routes->post('/auth/valid_register', 'Auth::valid_register');
$routes->post('/auth/valid_login', 'Auth::valid_login');

$routes->group('pengaduan', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Pengaduan::index'); // Display list of reports
    $routes->get('create', 'Pengaduan::create'); // Display form to create a report
    $routes->post('store', 'Pengaduan::store'); // Store a new report
    $routes->get('edit/(:num)', 'Pengaduan::edit/$1'); // Display form to edit a report
    $routes->post('update/(:num)', 'Pengaduan::update/$1'); // Update a report
    $routes->get('delete/(:num)', 'Pengaduan::delete/$1'); // Delete a report
});

//

