<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/principal', 'Principal::index');
$routes->get('/nosotros', 'Nosotros::index');
$routes->get('/servicios', 'Servicios::index');
/*
$routes->get('/contactos', 'Contactos::index');
$routes->get('/formulario', 'Contactos::formulario');
*/