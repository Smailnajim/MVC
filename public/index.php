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
        $view = $homeController->index();
        break;

    case 'login':
        $loginController = new LoginController;
        $view = $loginController->viewLogin();
        break;

    case 'register':
        $registerController = new RegisterController;
        $view = $registerController->viewRegister();
        break;
    default:
        echo 'your path :'.$path;
}
if($path = '') $path = 'Home';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $path ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php echo $view ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>