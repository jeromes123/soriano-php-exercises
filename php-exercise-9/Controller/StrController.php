<?php
include "Model/StrModel.php";

class StrController
{
    public $model;
    
    public function __construct()
    {
        $this->model = new StrModel("I am a test STRING");
    }

    public function render()
    {   
        $controller =  new StrController();
        $result = $controller->model->printStr(); 
        $result .= $controller->model->printLength();
        $result .= $controller->model->printToLowercase();
        $result .= $controller->model->printToUppercase();
        $result .= $controller->model->printUppercaseFirst();
        $result .= $controller->model->printLowercaseFirst();
        $result .= $controller->model->printUppercaseEveryWord();
        $result .= $controller->model->printReversedString();
        include "View/StrView.php";
    }
}
