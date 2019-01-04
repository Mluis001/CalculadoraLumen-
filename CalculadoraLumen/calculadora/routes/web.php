<?php

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

$router->group(['middleware' => []], function () use ($router) 
{
    $router->post('/Suma', ['uses' => 'ExampleController@Suma']);
    $router->post('/Resta', ['uses' => 'ExampleController@Resta']);
    $router->post('/Multiplicacion', ['uses' => 'ExampleController@Multiplicacion']);
    $router->post('/Division', ['uses' => 'ExampleController@Division']);
});
