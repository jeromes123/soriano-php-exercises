<?php
include "Model/InfoModel.php";

class InfoController
{
    public $model;

    public function __construct()
    {
        $this->model = new InfoModel();
    }

    public function render()
    {
        if (isset($_POST['submit'])) {
            $controller = new InfoController();
            $result = $controller->model->displayInfo($_POST['name'], $_POST['email'], $_POST['message']);
        }
        include "View/InfoView.php";
    }
}
