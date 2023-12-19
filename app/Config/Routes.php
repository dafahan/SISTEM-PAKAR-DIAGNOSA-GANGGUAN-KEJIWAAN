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

use App\Config\Auth as AuthConfig;

/** @var RouteCollection $routes */

// Myth:Auth routes file.
$routes->group('', ['namespace' => 'App\Controllers'], static function ($routes) {
    // Load the reserved routes from Auth.php
    $config         = config(AuthConfig::class);
    $reservedRoutes = $config->reservedRoutes;

    // Login/out
    $routes->get($reservedRoutes['login'], 'AuthController::login', ['as' => $reservedRoutes['login']]);
    $routes->post($reservedRoutes['login'], 'AuthController::attemptLogin');
    $routes->get($reservedRoutes['logout'], 'AuthController::logout');

    // Registration
    $routes->get($reservedRoutes['register'], 'AuthController::register', ['as' => $reservedRoutes['register']]);
    $routes->post($reservedRoutes['register'], 'AuthController::attemptRegister');

    // Activation
    $routes->get($reservedRoutes['activate-account'], 'AuthController::activateAccount', ['as' => $reservedRoutes['activate-account']]);
    $routes->get($reservedRoutes['resend-activate-account'], 'AuthController::resendActivateAccount', ['as' => $reservedRoutes['resend-activate-account']]);

    // Forgot/Resets
    $routes->get($reservedRoutes['forgot'], 'AuthController::forgotPassword', ['as' => $reservedRoutes['forgot']]);
    $routes->post($reservedRoutes['forgot'], 'AuthController::attemptForgot');
    $routes->get($reservedRoutes['reset-password'], 'AuthController::resetPassword', ['as' => $reservedRoutes['reset-password']]);
    $routes->post($reservedRoutes['reset-password'], 'AuthController::attemptReset');
});
