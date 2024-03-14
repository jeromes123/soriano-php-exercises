<?php
include "Model/DateModel.php";

class DateController
{
    public $model;

    public function __construct()
    {
        $this->model = new DateModel();
    }

    public function render()
    {
        $controller = new DateController();
        $result = $controller->model->displayDates();
        include "View/DateView.php";
    }
}
