<?php

ob_start();
session_start();

require_once "config/config.php";

$url = (isset($_GET["url"]) && $_GET["url"] != null) ? $_GET["url"] : "Inicio/index";
$url = rtrim($url);
$url = rtrim($url, "/");
$url = explode("/", $url);

$controller = ( isset($url[0]) ) ? $url[0] . "Controller" : "InicioController";
$method = ( isset($url[1]) && $url[1] != null ) ? $url[1] : "index";
$params = ( isset($url[2]) && $url[2] != null ) ? $url[2] : null;
$params2 = ( isset($url[3]) && $url[3] != null ) ? $url[3] : null;

spl_autoload_register(function($class) {
    if (file_exists(CORE . $class . ".php")) {
        require CORE . $class . ".php";
    } elseif (MODELS . $class . ".php") {
        require MODELS . $class . ".php";
    } else {
        exit("La clase " . $class . " no ha sido definida.");
    }
});

$fileController = "controllers/" . $controller . ".php";
if (file_exists($fileController)) {
    require $fileController;
    $controller = new $controller();
    if (method_exists($controller, $method)) {
        if (isset($params) && $params != null) {
            if (isset($params2) && $params2 != null) {
                $controller->{$method}($params, $params2);
            } else {
                $controller->{$method}($params);
            }
        } else {
            $controller->{$method}();
        }
    } else {
        header("Location: " . URL . "error.php");
    }
} else {
    header("Location: " . URL . "error.php");
}

ob_end_flush();

?>