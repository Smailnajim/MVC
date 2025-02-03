<?php

include_once "./../App/controllers/HomeController.php";




$path = $_SERVER['REQUEST_URI'];
echo $path;
switch ($path){
    case '/':
        $homeController = new HomeController;
        $homeController->index();
        break;
}