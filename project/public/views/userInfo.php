<?php

const PROFILE = "profile";

$serverNowURl =   substr($_SERVER['REQUEST_URI'], 1);

if(!isset($_SESSION['user']) && $_SESSION['user'] == ''){
    $url = "http://$_SERVER[HTTP_HOST]";
    header("Location: {$url}/");
    exit;
}