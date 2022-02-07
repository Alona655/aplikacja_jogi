<?php

require_once 'AppController.php';
require_once 'DefaultController.php';
require_once __DIR__.'/../repository/WishListRepository.php';

class WishListController extends AppController
{
    public function myCourse ()
    {
        $wishList = new WishListRepository();

        $userList = $wishList->getWishList($_SESSION['user']);

        return $this->render('myCourse', ['list' => $userList]);
    }
}