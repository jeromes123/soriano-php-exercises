<?php
namespace Controller;

use Model\LoginModel;

class LoginController
{
    public $model;

    function __construct()
    {
        $this->model = new LoginModel();
    }

    function render()
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
