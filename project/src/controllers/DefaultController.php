<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index()
    {
        $this->render('info');
    }
    public function login()
    {
        $this->render('login');
    }
    public function info()
    {
        $this->render('info');
    }
    public function registration()
    {
        $this->render('registration');
    }
    public function profile()
    {
        $this->render('profile');
    }
    public function activity()
    {
        $this->render('activity');
    }
    public function myCourseList()
    {
        $this->render('myCourseList');
    }
    public function myCourse()
    {
        $this->render('myCourse');
    }
    public function search()
    {
        $this->render('search');
    }
    public function settings()
    {
        $this->render('settings');
    }
    public function errorPage()
    {
        $this->render('404');
    }

}