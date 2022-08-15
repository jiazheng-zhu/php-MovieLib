<?php



$router->get('', 'PagesController@home');


$router->get('login/login', 'LoginController@login');
$router->post('login/login', 'LoginController@login');
$router->post('login/logout', 'LoginController@logout');

//Movie
$router->get('movie', 'MovieController@index');
$router->get('movie/show', 'MovieController@show');
$router->get('movie/create', 'MovieController@create');
$router->post('movie/create', 'MovieController@store');
$router->get('movie/edit', 'MovieController@edit'); //book/edit?id=1
$router->post('movie/edit', 'MovieController@update'); //book/edit?id=1
$router->get('movie/delete', 'MovieController@destroy'); //book/delete?id=1

$router->get('director', 'DirectorController@index');
$router->get('director/show', 'DirectorController@show');
$router->get('director/create', 'DirectorController@create');
$router->post('director/create', 'DirectorController@store');
$router->get('director/edit', 'DirectorController@edit'); //book/edit?id=1
$router->post('director/edit', 'DirectorController@update'); //book/edit?id=1
$router->get('director/delete', 'DirectorController@destroy'); //book/delete?id=1

$router->get('myfavorite', 'MyFavoriteController@index');
$router->post('myfavorite/edit', 'MyFavoriteController@update'); //book/edit?id=1
