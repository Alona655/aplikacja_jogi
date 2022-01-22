<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::get('projects', 'DefaultController');
Router::get('registration', 'DefaultController');
Router::get('profile', 'DefaultController');
Router::get('activity', 'DefaultController');
Router::get('myCourseList', 'DefaultController');
Router::get('myCourse', 'DefaultController');
Router::get('search', 'DefaultController');
Router::get('settings', 'DefaultController');

Router::run($path);