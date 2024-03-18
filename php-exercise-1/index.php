<?php
use View\HelloView;

spl_autoload_register(function ($class_name) {
    $file = __DIR__ . '/' . str_replace('\\', '/', $class_name) . '.php';
    require_once $file;
});

$view = new HelloView();
$view->render();
