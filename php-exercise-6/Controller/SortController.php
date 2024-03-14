<?php
include "Model/SortModel.php";

class SortController
{
    public $model;

    public function __construct()
    {
        $this->model = new SortModel();
    }

    function render()
    {   
        if(isset($_POST["submit"])) {
            $controller = new SortController();
            $result = implode(", ", $controller->model->sort($_POST['numbers']));
        }
        include "View/SortView.php";
    }
}
