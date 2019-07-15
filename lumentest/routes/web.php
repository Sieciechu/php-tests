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
/** @var \Laravel\Lumen\Routing\Router $router */
$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->get('user/id/{id}', function ($id) {
    return 'User '.$id;
});
$router->get('posts/{postId}/comments/{commentId}', function ($postId, $commentId) {
    var_dump($postId);
    return "post id: {$postId}, comment id : {$commentId}";
});

$router->get('user/{name:[A-Za-z]+}', function ($name) {
    return $name ?? "no user name given";
});


$router->get('profile/{id}', [
    'as' => 'profile', 'uses' => 'UserController@showProfile'
]);

$router->get('user/{id}', 'UserController@show');
