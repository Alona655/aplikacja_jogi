<?php

require_once 'AppController.php';
require_once 'DefaultController.php';
require_once __DIR__ . '/../repository/UserRepository.php';
require_once __DIR__ . '/../repository/PageTitleRepository.php';

class ProfileController
{
    public function profile()
    {
        $userRepository = new UserRepository();
        $pageRepository = new PageTitleRepository();

        $userInfo = $userRepository->getInfoUserByUuid($_SESSION['user']);

        $pageInfo = $pageRepository->findTittleByPageName('profile');

        return $this->render('profile', ['user' => $userInfo, 'title' => $pageInfo]);
    }

    public function updateProfile()
    {
        $userRepository = new UserRepository();
        $userRepository->updateInfoUser($_SESSION['user'], $_POST);
        $this->profile();
    }

    public function updateUserSetting()
    {
        $userRepository = new UserRepository();

        $userInfo = $userRepository->findUserByUuid($_SESSION['user']);

        if ($this->isPost()) {
            if ($_POST['oldPassword'] !== '' && $_POST['newPassword'] !== '') {
                if (md5($_POST['oldPassword']) == $userInfo->getPassword()) {
                    if( md5($_POST['newPassword']) != md5($_POST['oldPassword'])){
                        $userRepository->updateUserPassword($userInfo->getUuid(), md5($_POST['newPassword']));
                        return $this->render('settings');
                    }else{
                        return $this->render('settings', ErrorCodes::SAME_PASSWORD);
                    }
                } else {
                    return $this->render('settings', ErrorCodes::WRONG_PASSWORD);
                }
            }
            return $this->render('settings');
        }
    }

    public function deleteUserProfile ()
    {
        if($this->isGet()){
            $userRepository = new UserRepository();
            if($_GET['delete'] == "true"){
                $userRepository->deleteUserByUuid($_SESSION['user']);
                return $this->render('registration');
            }
        }
        session_destroy();
        return $this->render('settings');
    }
}