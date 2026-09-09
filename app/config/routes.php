<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

$router->get('/', 'Welcome::index');


/* Authentication Routes */

$router->get('/login', 'LoginController::index');

$router->post('/login', 'LoginController::authenticate');

$router->get('/logout', 'LoginController::logout');


/* Product Routes */

$router->get('/products', 'ProductController::index')
       ->middleware('AuthMiddleware');

$router->get('/products/create', 'ProductController::create')
       ->middleware('AuthMiddleware');

$router->post('/products/store', 'ProductController::store')
       ->middleware('AuthMiddleware');

$router->get('/products/edit/{id}', 'ProductController::edit')
       ->middleware('AuthMiddleware');

$router->post('/products/update/{id}', 'ProductController::update')
       ->middleware('AuthMiddleware');

$router->get('/products/delete/{id}', 'ProductController::delete')
       ->middleware('AuthMiddleware');