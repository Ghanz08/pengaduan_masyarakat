<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/masyarakat', 'Masyarakat::index');
$routes->get('/masyarakat/form', 'Masyarakat::form');
$routes->get('/masyarakat/laporan_anda', 'Masyarakat::laporan_anda');
$routes->get('/masyarakat/about_us', 'Masyarakat::About_us');
$routes->get('/masyarakat/profil', 'Masyarakat::Profile');
$routes->get('/masyarakat/complete', 'Masyarakat::Complete');
