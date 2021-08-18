<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->group(['prefix' => 'api'], function () use ($router) {

    $router->post('register', 'AuthController@register');

    $router->post('login', 'AuthController@login');
 
 });


$router->get('/', function () use ($router) {
    return $router->app->version();
});
