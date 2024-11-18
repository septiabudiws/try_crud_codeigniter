<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\DashboardController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'DashboardController::index');
$routes->get('/tambah', 'BiodataController::index');
$routes->post('/tambah/save', 'BiodataController::save');
$routes->get('/biodata/hapus/(:segment)', 'BiodataController::hapus/$1');
$routes->get('/detail/(:segment)', 'DashboardController::detail/$1');
