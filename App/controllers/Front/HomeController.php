<?php
namespace App\controllers\Front;

class HomeController {
    public function index() {
        include_once "./../App/View/Home.php";
    }
}