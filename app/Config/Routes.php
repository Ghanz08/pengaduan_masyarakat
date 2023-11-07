<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/masyarakat', 'Masyarakat::index');
$routes->get('/masyarakat/form', 'Masyarakat::form');
