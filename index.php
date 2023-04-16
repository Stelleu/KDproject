<?php
namespace App;

include "conf.inc.php";
function myAutoloader($class){
    $class = str_ireplace("App\\", "", $class);
    $class = str_ireplace("\\", "/", $class);
    if(file_exists($class.".class.php")){
        include $class.".class.php";
    }
}
spl_autoload_register("App\myAutoloader");


$uri = $_SERVER["REQUEST_URI"];
if (!file_exists("route.json")){
    die("le fichier n'existe pas");
}
$json = file_get_contents("route.json");
$route = json_decode($json,true);
if (!$route[$uri] || !$route[$uri]["controller"] || !$route[$uri]["action"] ){
    die("URL invalide");
}
$controller = ucfirst(strtolower($route[$uri]["controller"]));
$action = strtolower($route[$uri]["action"]);
$controllerFile = "Controller/".$controller.".class.php";
if (!file_exists($controllerFile)){
    die("Le fichier n'existe pas ici");
}
include $controllerFile;
$controller = "App\\Controller\\".$controller;
if (!class_exists($controller)){
    die("La classe".$controller. " n'existe pas");
}
$objectController = new $controller();
if (!method_exists($objectController,$action)){
    die("la methode".$action."n'existe pas");
}
$objectController->$action();
