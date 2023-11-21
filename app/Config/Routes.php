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
$routes->get('/masyarakat/detail/(:num)', 'Masyarakat::detail/$1');


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
    $routes->get('diterima/(:num)', 'Pengaduan::diterima/$1'); // Update role to 1
    $routes->get('ditolak/(:num)', 'Pengaduan::ditolak/$1'); // Update role to 4
});

// testing halaman admin.
$routes->group('admin', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('dashboard', 'Admin::dashboard');
    $routes->get('pengaduan', 'Admin::pengaduan');
    $routes->get('diterima/(:num)', 'Pengaduan::diterima/$1'); // Update role to 1
    $routes->get('ditolak/(:num)', 'Pengaduan::ditolak/$1'); // Update role to 4
    $routes->get('tanggapi', 'Tanggapan::lapor_detail');
    $routes->get('manajemen_masyarakat', 'Admin::manajemen_masyarakat');
    $routes->get('manajemen_petugas', 'Admin::manajemen_petugas');
    // Add more admin routes as needed
});
//

