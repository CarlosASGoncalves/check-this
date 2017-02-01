<?php 

//nav routes
$router->get('', 'Pagescontroller@home');

$router->get('about', 'Pagescontroller@about');

$router->get('contact', 'Pagescontroller@contact');

$router->get('upload', 'Pagescontroller@upload');

$router->get('login', 'Pagescontroller@login');

//contact routes
$router->post('contact', 'ContactController@index');

//users routes
$router->get('users', 'UsersController@index');

$router->post('users', 'UsersController@store');// convetion use store meaning in this case: store a new user


//file management routes
$router->get('upload', 'FileManagementController@index');

$router->post('upload_file', 'FileManagementController@uploads');

$router->post('delete', 'FileManagementController@delete');


//login routes
$router->post('login', 'LoginController@index');

$router->get('home', 'LoginController@home');

$router->get('logout', 'LoginController@logout');




