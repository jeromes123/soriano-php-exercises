<?php
require_once 'model/CalculatorModel.php';

class CalculatorController
{
    private $model;

    function __construct(CalculatorModel $model)
    {
        $this->model = $model;
    }

    function render()
    {
        if (isset($_POST["operation"])) {
            $result = $this->model->calculate($_POST["firstNum"], $_POST["secondNum"], $_POST["operation"]);
        }
        require_once 'view/CalculatorView.php';
    }
}
