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

$router->get('/key',function(){
    return str_random(32);
});

$router->get('/foo', function(){
    return 'Hello, GET Method! ';
});

$router->post('/bar', function(){
    return 'Hello, POST Method! ';
});

// The router allows you to register routes that respond to any HTTP verb;
$router->get('/get', function(){
    return 'GET';
});
$router->post('/post', function(){
    return 'POST';
});
$router->put('/put', function(){
    return 'PUT';
});
$router->patch('/patch', function(){
    return 'PATCH';
});
$router->delete('/delete', function(){
    return 'DELETE';
});
$router->options('/options', function(){
    return 'OPTIONS';
});

$router->get('/user/{id}', function($id){
    return 'User id = ' . $id;
});

$router->get('/post/{postId}/comments/{commentId}', function($postId, $commentId){
    return 'Post ID = ' . $postId . 'Comment ID' . $commentId;
});

$router->get('/optional[/{param}]', function($param = null){
    return $param;
});