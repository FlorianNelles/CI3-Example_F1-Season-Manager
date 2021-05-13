<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['posts/index'] = 'posts/index';
$route['teams/create'] = 'teams/create';
$route['teams/update'] = 'teams/update';

$route['posts/create'] = 'posts/create';
$route['posts/update'] = 'posts/update';
$route['drivers/create'] = 'drivers/create';
$route['drivers/update'] = 'drivers/update';
$route['posts/(:any)'] = 'posts/view/$1';

$route['teams'] = 'teams/index';
$route['teams/(:any)'] = 'teams/view/$1';

$route['tests'] = 'tests/index';
$route['posts'] = 'posts/index';
$route['drivers'] = 'drivers/index';
$route['drivers/(:any)'] = 'drivers/view/$1';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
