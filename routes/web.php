<?php


// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
// header('Access-Control-Allow-Headers: Content-Type, X-Auth-Token, Origin, Authorization');
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

$router->get('/', function () use ($router) {
    //return $router->app->version();
    return 'Wazzup Lumen!';
});
// API route group
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->post('register', 'AuthController@register');
    $router->post('login', 'AuthController@login');
    $router->get('profile', 'UserController@profile');

    $router->get('users/{id}', 'UserController@singleUser');
    $router->get('userinfo/{email}', 'UserController@getUser');
    $router->get('users', 'UserController@allUsers');

    $router->get('companyinfo/{id}', 'CompanyController@getCompany');

 });
