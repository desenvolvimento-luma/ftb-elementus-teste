<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/obrigado', 'Home::obrigado');
$routes->post('/lead', 'Lead::store');

$routes->get('/ppci', static function () {
    return redirect()->to('/');
});
$routes->get('/elementuscorrimaos/ppci', static function () {
    return redirect()->to('/');
});
$routes->get('/ppci/obrigado', static function () {
    return redirect()->to('/obrigado');
});
$routes->get('/elementuscorrimaos/ppci/obrigado', static function () {
    return redirect()->to('/obrigado');
});
