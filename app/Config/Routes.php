<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;
use App\Controllers\Gejala;
use App\Controllers\Penyakit;
use App\Controllers\Rule;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Home::dashboard');

$routes->get('/gejala/?(:any)/?(:any)', [Gejala::class,'gejala']);
$routes->post('/gejala/?(:any)/?(:any)', [Gejala::class,'prosess']);

$routes->get('/penyakit/?(:any)/?(:any)', [Penyakit::class,'penyakit']);
$routes->post('/penyakit/?(:any)/?(:any)', [Penyakit::class,'prosess']);

$routes->get('/rule/?(:any)/?(:any)', [Rule::class,'rule']);
$routes->post('/rule/?(:any)/?(:any)', [Rule::class,'prosess']);

$routes->get('/article', 'Home::article');
$routes->get('/article/(:any)', [Home::class,'articleDetail']);

$routes->get('diagnosis', 'Diagnosis::index');
$routes->post('diagnosis', 'Diagnosis::process');
