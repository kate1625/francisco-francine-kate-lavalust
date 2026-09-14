<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

$router->get('/', 'LoginController::index');


/* Authentication Routes */

$router->get('/login', 'LoginController::index');

$router->post('/login', 'LoginController::authenticate');

$router->get('/logout', 'LoginController::logout');


/* Product Routes */

$router->get('/products', 'ProductController::index')
       ->middleware('AuthMiddleware');

$router->get('/products/create', 'ProductController::create')
       ->middleware('ManageProductsMiddleware');

$router->post('/products/store', 'ProductController::store')
       ->middleware('ManageProductsMiddleware');

$router->get('/products/edit/{id}', 'ProductController::edit')
       ->middleware('ManageProductsMiddleware');

$router->post('/products/update/{id}', 'ProductController::update')
       ->middleware('ManageProductsMiddleware');

$router->get('/products/delete/{id}', 'ProductController::delete')
       ->middleware('ManageProductsMiddleware');