<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['languages/german'] = 'languages/german';
$route['languages/english'] = 'languages/english';

$route['users/login'] = 'users/login';
$route['users/register'] = 'users/register';
$route['users/logout'] = 'users/logout';

$route['teams/delete/(:any)'] = 'teams/delete/$1';
$route['teams/create'] = 'teams/create';
$route['teams/update/(:any)'] = 'teams/update/$1';
$route['teams/edit/(:any)'] = 'teams/edit/$1';
$route['teams'] = 'teams/index';
$route['teams/(:any)'] = 'teams/view/$1';

$route['posts/delete/(:any)'] = 'posts/delete/$1';
$route['posts'] = 'posts/index';
$route['posts/create'] = 'posts/create';
$route['posts/update/(:any)'] = 'posts/update/$1';
$route['posts/edit/(:any)'] = 'posts/edit/$1';
$route['posts/(:any)'] = 'posts/view/$1';

$route['drivers/delete/(:any)'] = 'drivers/delete/$1';
$route['drivers/create'] = 'drivers/create';
$route['drivers/update/(:any)'] = 'drivers/update/$1';
$route['drivers/edit/(:any)'] = 'drivers/edit/$1';
$route['drivers'] = 'drivers/index';
$route['drivers/(:any)'] = 'drivers/view/$1';

$route['tests/index'] = 'tests/index';
$route['tests'] = 'tests/index';

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
