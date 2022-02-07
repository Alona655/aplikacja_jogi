<?php

require_once 'AppController.php';
require_once 'DefaultController.php';
require_once __DIR__.'/../repository/UserRepository.php';

class ActivityController extends AppController
{

    public function activity ()
    {
        $userRepository = new UserRepository();
        $userInfo = $userRepository->getActivity($_SESSION['user']);
        $course = $userRepository->lastCourse($_SESSION['user']);
        return $this->render('activity', ['user' => $userInfo, 'course' => $course]);
    }

}