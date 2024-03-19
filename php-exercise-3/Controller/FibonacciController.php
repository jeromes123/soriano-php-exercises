<?php
namespace Controller;

use Model\FibonacciModel;

class FibonacciController
{
    public $model;

    public function __construct()
    {
        $this->model = new FibonacciModel();
    }

    public function getSequence($input)
    {
        $sequence = $this->model->createSequence($input);
        $result = '<div class="result">';
        $result .= 'Fibonacci Sequence: ' . implode(', ', $sequence);
        $result .= '</div>';
        return $result;
    }
}
