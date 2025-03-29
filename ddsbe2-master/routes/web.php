<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// Unsecured Routes
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/users', 'UserController@index'); // Get all users
    $router->get('/users/{id}', 'UserController@show'); // Get user by ID
    $router->post('/users', 'UserController@add'); // Create a new user
    $router->put('/users/{id}', 'UserController@update'); // Update user
    $router->patch('/users/{id}', 'UserController@update'); // Partial update
    $router->delete('/users/{id}', 'UserController@delete'); // Delete user
});