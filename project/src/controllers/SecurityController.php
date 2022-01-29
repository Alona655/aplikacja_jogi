<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';

class SecurityController extends AppController
{
    public function login()
    {
        $user = new User('jsnow@gmail.com', 'admin', 'John', 'Snow');

        $email = $_POST["emailLoginPage"];
        $password = $_POST["passwordLoginPage"];

        if($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['User with this email not exist!']]);
        }

        if ($user -> getPassword() !== $password) {
            return $this->render('login', ['messages' => ['Wrong password!']]);
        }

        return $this->render('activity');
    }
}