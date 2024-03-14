<?php
include "Model/LoginModel.php";

class LoginController
{
    public $model;

    public function __construct()
    {
        $this->model = new LoginModel();
    }

    public function render()
    {
        if (isset($_POST["submit"])) {
            $controller = new LoginController();
            $result = "<div>";
            $result .= $controller->model->validate($_POST["username"], $_POST["password"]);
            $result .= "</div>";
        }
        include "View/LoginView.php";
    }
}
