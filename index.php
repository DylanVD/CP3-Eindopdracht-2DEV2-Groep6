<?php
session_start();

define('DS', DIRECTORY_SEPARATOR);
define('WWW_ROOT', __DIR__ . DS);

$routes = array(
    'home' => array(
        'controller' => 'Items',
        'action' => 'index'
    ),
    'register' => array(
        'controller' => 'Users',
        'action' => 'register'
    ),
    'upload' => array(
        'controller' => 'Users',
        'action' => 'index'
    ),
    'login' => array(
        'controller' => 'Users',
        'action' => 'login'
    ),
    'logout' => array(
        'controller' => 'Users',
        'action' => 'logout'
    ),
    'add' => array(
        'controller' => 'Items',
        'action' => 'add'
),
    'detail' => array(
        'controller' => 'Items',
        'action' => 'detail'
    ),
    'review' => array(
        'controller' => 'Items',
        'action' => 'review'
    ));

if(empty($_GET['page'])) {
    $_GET['page'] = 'home';
}
if(empty($routes[$_GET['page']])) {
    header('Location: index.php');
    exit();
}

$route = $routes[$_GET['page']];
$controllerName = $route['controller'] . 'Controller';

require_once WWW_ROOT . 'controller' . DS . $controllerName . ".php";

$controllerObj = new $controllerName();
$controllerObj->route = $route;
$controllerObj->filter();
$controllerObj->render();