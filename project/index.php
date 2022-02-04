<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('', 'DefaultController');
//Router::get('login', 'DefaultController');
Router::post('login', 'SecurityController');
Router::get('registration', 'DefaultController');
Router::get('info', 'DefaultController');
Router::get('profile', 'DefaultController');
Router::get('activity', 'DefaultController');
Router::get('myCourse', 'DefaultController');
Router::get('search', 'DefaultController');
Router::get('settings', 'DefaultController');

Router::run($path);