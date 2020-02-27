<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// CMS
$route['contact'] = 'cms/contact';
$route['about'] = 'cms/about';
$route['policy'] = 'cms/policy';
$route['faq'] = 'cms/faq';
$route['careers'] = 'cms/careers';

// Account
$route['login'] = 'account';
$route['signup'] = 'account';
