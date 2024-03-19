<?php
namespace Controller;

use Model\CalculatorModel;

class CalculatorController
{
    public $model;

    function __construct()
    {
        $this->model = new CalculatorModel();
    }
}
