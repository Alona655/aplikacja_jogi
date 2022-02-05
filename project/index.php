<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);
/**
 * Get
 */
Router::get('', 'DefaultController');
//Router::get('login', 'DefaultController');
Router::post('login', 'SecurityController');
Router::get('registration', 'DefaultController');
Router::get('info', 'DefaultController');
Router::get('profile', 'ProfileController');
Router::get('activity', 'DefaultController');
Router::get('myCourseList', 'DefaultController');
Router::get('myCourse', 'DefaultController');
Router::get('search', 'DefaultController');
Router::get('settings', 'DefaultController');
Router::get('logOut', 'SecurityController');
Router::get('deleteUserProfile', 'ProfileController');
Router::get('errorPage', 'DefaultController');

/**
 * Post
 */
Router::post('login', 'SecurityController');
Router::post('registrationUser', 'SecurityController');
Router::post('updateProfile', 'ProfileController');
Router::post('updateUserSetting', 'ProfileController');


Router::run($path);
