<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


// $routes->get('/', 'Home::index');
$routes->get('/pulau', 'Pulau::home');
$routes->get('/pulau/create', 'Pulau::create');
$routes->post('/pulau/save', 'Pulau::save');
$routes->get('/pulau/detail/(:any)', 'pulau::detail/$1');
$routes->delete('/pulau/(:num)', 'pulau::delete/$1');
$routes->post('/pulau/update/(:num)', 'pulau::update/$1');
$routes->get('/pulau/edit/(:segment)', 'pulau::edit/$1');



service('auth')->routes($routes);
