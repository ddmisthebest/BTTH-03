<?php
require_once('../app/config/config.php');
require_once APP_ROOT . '/app/libs/DBConnection.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Xử lý xác thực và sử dụng autoloading cho controllers
$controllerClassName = ucfirst($controller) . 'Controller';
$controllerFileName = APP_ROOT . "/app/controllers/{$controllerClassName}.php";

if (file_exists($controllerFileName)) {
    require_once $controllerFileName;
    if (class_exists($controllerClassName)) {
        $controllerInstance = new $controllerClassName();
        if (method_exists($controllerInstance, $action)) {
            // Gọi phương thức action tương ứng
            $controllerInstance->$action();
        } else {
            echo "Action '$action' không tồn tại trong controller '$controllerClassName'.";
        }
    } else {
        echo "Controller '$controllerClassName' không tồn tại.";
    }
} else {
    // Xử lý trường hợp 404
    header("HTTP/1.0 404 Not Found");
    echo "404 Not Found";
}
