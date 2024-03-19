<?php
namespace View;

use Controller\LoginController;

class LoginView
{
    public $controller;

    public function __construct()
    {
        $this->controller = new LoginController();
    }

    public function render()
    {
        echo <<<html
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <title>Exercise 4</title>
                <!--<link rel="stylesheet" href="style.css" /> ChatGPT Design -->
            </head>
            <body>
                <form action="" method="POST" name="loginform">
                    <h1>Exercise 4</h1>
                    <table class="center">
                        <tr>
                            <td><input type="text" name="username" placeholder="Username"></td>
                        </tr>
                        <tr>
                            <td><input type="password" name="password" placeholder="Password"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="submit" value="Login"></td>
                        </tr>
                    </table>
                </form>
            html;
        if (isset($_POST['submit'])) {
            echo $this->controller->model->validate($_POST['username'], $_POST['password']);
        }
        echo <<<html
            </body>
            </html>
            html;
    }
}
