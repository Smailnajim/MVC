<?php

    namespace app\config;

    class Routes
    {
        private $controller = 'Page';
        private $method = 'index';
        private $param = [];

        public function __construct()
        {
            $url = $this->getUrl();
            if (isset($url[0])) {
                $controllerClass = ucwords($url[0]);


                if (class_exists('\\app\\controllers\\' . $controllerClass . 'Controller')) {
                    $this->controller = $controllerClass;
                    // unset($url[0]);
                }


                $controllerClass = '\\app\\controllers\\' . $this->controller . 'Controller';
                $this->controller = new $controllerClass;

                if (isset($url[1])) {
                    if (method_exists($this->controller, $url[1])) {
                        $this->method = $url[1];
                        // unset($url[1]);
                    }
                }


                if (!empty($_REQUEST)) {
                    $this->param = $_REQUEST;
                } else {
                    $this->param = [];
                }
            } else {
                $this->controller = new $this->controller;
            }



            call_user_func_array([$this->controller, $this->method], $this->param);
        }

        private function getUrl()
        {

            $uri = $_SERVER['REQUEST_URI'];




            $uri = explode('/', trim($uri, '/'));
            return $uri;
        }
        private function convertArray($array)
        {

            foreach ($array as $value) {
                $this->param = $value;
            }
        }
    }
    ?>