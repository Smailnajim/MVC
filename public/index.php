<?php
require "./../vendor/autoload.php";

use App\controllers\Front\HomeController;
use App\controllers\Front\LoginController;
use App\controllers\Front\RegisterController;


$path = $_SERVER['REQUEST_URI'];

$path = str_replace('/MVC/public/', '', $path);

switch ($path){
    case '':
        $homeController = new HomeController();
        $homeController->index();
        break;

    case 'login':
        $loginController = new LoginController;
        $loginController->viewLogin();
        break;

    case 'register':
        $registerController = new RegisterController;
        $registerController->viewRegister();
        break;
    default:
        echo 'your path :'.$path;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $path ?></title>
</head>
<body>
    
</body>
</html>