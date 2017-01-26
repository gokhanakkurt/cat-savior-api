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

$app->get('posts', 'PostsController@get');
$app->post('posts', 'PostsController@store');
$app->get('posts/nearby', 'PostsController@listNearby');
$app->get('posts/{id}', 'PostsController@show');
