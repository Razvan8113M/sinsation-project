<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/about', 'Home::about', ['as' => 'despre']);

$routes->get('/prices', 'Home::prices', ['as' => 'tarife']);
$routes->get('/blog', 'Home::blog', ['as' => 'blog']);
$routes->get('/contact', 'Home::contact', ['as' => 'contact']);

$routes->set404Override(function(){
    return view('errors/html/custom_404');
});

$routes->get('/profile', 'UserProfiles::userProfile', ['as' => 'profile']);



service('auth')->routes($routes);

$routes->get('/coming_soon', 'ComingSoonController::index');


