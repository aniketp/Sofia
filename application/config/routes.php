<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['users/profile'] = 'users/profile';

$route["send/(:any)/(:num)"]="request/send_request/$1/$2";
$route["accept/(:any)/(:num)"]="request/accept_request/$1/$2";
$route["reject/(:any)/(:num)"]="request/reject_request/$1/$2";

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
