<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/gejala', 'Home::gejala');
$routes->get('/penyakit', 'Home::penyakit');
$routes->get('/rule', 'Home::rule');

$routes->get('diagnosis', 'Diagnosis::index');
$routes->post('diagnosis', 'Diagnosis::process');
