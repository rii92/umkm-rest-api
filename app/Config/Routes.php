<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('user', 'TblUserController::index');
$routes->get('supervisi', 'TblSupervisiController::index');
$routes->get('kelurahan', 'TblKelurahanController::index');
$routes->get('petugas', 'TblPetugasController::index');
$routes->post('supervisi', 'TblSupervisiController::create');
$routes->get('login', 'TblUserController::login');