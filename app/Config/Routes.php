<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

$routes->get('/', 'Masyarakat::index');

$routes->get('/login', 'Auth::login');
$routes->get('/register', 'Auth::register');
$routes->post('/auth/valid_register', 'Auth::valid_register');
$routes->post('/auth/valid_login', 'Auth::valid_login');

$routes->get('/masyarakat/form', 'Masyarakat::form');
$routes->get('/masyarakat/laporan_anda', 'Masyarakat::laporan_anda');
$routes->get('/masyarakat/about_us', 'Masyarakat::About_us');
$routes->get('/masyarakat/profil', 'Masyarakat::Profile');
$routes->get('/masyarakat/complete', 'Masyarakat::Complete');



