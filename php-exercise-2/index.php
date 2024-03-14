<?php
require_once 'controllers/CalculatorController.php';
$model = new CalculatorModel();
$controller = new CalculatorController($model);
$controller->render();
