<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';

class SecurityController extends AppController
{
    public function login()
    {
        ini_set('memory_limit','536M');
        $user = new User('jsnow@gmail.com', 'admin', 'John', 'Snow');

        if ($this->isPost()) {
            return $this->login('login');
        }

        $email = $_POST["login-conteiner-formLoginPage"];
        $password = $_POST["password-conteiner-formLoginPage"];

        if($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['User with this email not exist!']]);
        }

        if ($user->getPassword() !== $password) {
            return $this->render('login', ['messages' => ['Wrong password!']]);
        }

//        return $this->render('activity');

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/activity");

    }
}