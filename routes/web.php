<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', [
    'as' => 'home',
    'HomeController@index'
]);
$router->get('/', 'HomeController@index');

$router->get('loadgame', [
    'as' => 'loadgame',
    'HomeController@loadgame'
]);
$router->get('loadgame', 'HomeController@loadgame');

$router->get('contact', [
    'as' => 'contact',
    'HomeController@contact'
]);
$router->get('contact', 'HomeController@contact');

$router->get('login', [
    'as' => 'login',
    'HomeController@login'
]);
$router->get('login', 'HomeController@login');

$router->get('register', [
    'as' => 'register',
    'HomeController@register'
]);
$router->get('register', 'HomeController@register');