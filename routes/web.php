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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('get_matches',  ['uses' => 'HomeController@get_matches']);
    $router->get('get_predictions',  ['uses' => 'HomeController@get_predictions']);
    $router->get('get_nations',  ['uses' => 'HomeController@get_nations']);
    $router->get('get_sports',  ['uses' => 'HomeController@get_sports']);
    $router->get('get_champions',  ['uses' => 'HomeController@get_champions']);
    
    $router->post('post_matches',  ['uses' => 'HomeController@post_matches']);
    $router->post('post_predictions',  ['uses' => 'HomeController@post_predictions']);
    $router->post('post_nations',  ['uses' => 'HomeController@post_nations']);
    $router->post('post_sports',  ['uses' => 'HomeController@post_sports']);
    $router->post('post_champions',  ['uses' => 'HomeController@post_champions']);
    
    $router->post('update_predictions',  ['uses' => 'HomeController@update_predictions']);
    // $router->get('authors/{id}', ['uses' => 'AuthorController@showOneAuthor']);
    // $router->post('authors', ['uses' => 'AuthorController@create']);
    // $router->delete('authors/{id}', ['uses' => 'AuthorController@delete']);
    // $router->put('authors/{id}', ['uses' => 'AuthorController@update']);
  });
