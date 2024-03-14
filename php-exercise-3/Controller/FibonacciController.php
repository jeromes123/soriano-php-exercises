<?php
require "Model/FibonacciModel.php";

class FibonacciController
{
    public $model;

    public function __construct()
    {
        $this->model = new FibonacciModel();
    }

    public function render()
    {
        if (isset($_POST['input'])) {
            $controller = new FibonacciController();
            $sequence = $controller->model->createSequence($_POST['input']);
            $result = '<div class="result">';
            $result .= 'Fibonacci Sequence: ' . implode(', ', $sequence);
            $result .= '</div>';
        }
        include "View/FibonacciView.php";
    }

}
