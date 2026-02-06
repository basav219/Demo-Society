<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');

$routes->get('/', 'Customer::index');
$routes->get('/customer', 'Customer::index');
$routes->post('/customer/save', 'Customer::save');
$routes->get('/customer/list', 'Customer::list');
