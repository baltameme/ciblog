<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['categories'] = 'categories/index';
$route['categories/create'] = 'categories/create';
$route['categories/posts/create'] = 'categories/posts/$1';

$route['posts/create'] = 'posts/create';
$route['posts/update'] = 'posts/update';
$route['posts/(:any)'] = 'posts/view/$1';
$route['posts'] = 'posts/index';
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

