<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;
use App\Controllers\Gejala;
use App\Controllers\Penyakit;
use App\Controllers\Rule;
use App\Controllers\Diagnosis;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Home::dashboard');

$routes->get('user','Home::user');

$routes->get('/gejala/?(:any)/?(:any)', [Gejala::class,'gejala']);
$routes->post('/gejala/?(:any)/?(:any)', [Gejala::class,'prosess']);

$routes->get('/penyakit/?(:any)/?(:any)', [Penyakit::class,'penyakit']);
$routes->post('/penyakit/?(:any)/?(:any)', [Penyakit::class,'prosess']);

$routes->get('/rule/?(:any)/?(:any)', [Rule::class,'rule']);
$routes->post('/rule/?(:any)/?(:any)', [Rule::class,'prosess']);

$routes->get('/diagnosis/?(:any)/?(:any)', [Diagnosis::class,'index']);
$routes->post('/diagnosis/?(:any)/?(:any)', [Diagnosis::class,'prosess']);

$routes->get('/article/?(:any)/?(:any)', [Home::class,'article']);
$routes->post('/article/?(:any)/?(:any)', [Home::class,'prosess']);

