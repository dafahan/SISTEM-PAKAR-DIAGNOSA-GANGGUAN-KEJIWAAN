<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/gejala', 'Home::gejala');
$routes->get('/penyakit', 'Home::penyakit');
$routes->get('/rule', 'Home::rule');
$routes->get('/article', 'Home::article');
$routes->get('/article/(:any)', [Home::class,'articleDetail']);

$routes->get('diagnosis', 'Diagnosis::index');
$routes->post('diagnosis', 'Diagnosis::process');
