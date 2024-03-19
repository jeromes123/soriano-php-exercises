<?php
namespace View;

use Controller\CalculatorController;

class CalculatorView
{
    public $controller;

    public function __construct()
    {
        $this->controller = new CalculatorController();
    }

    public function render()
    {
        echo <<<html
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <link rel="stylesheet" href="style.css">
                <title>Exercise 2</title>
            </head>
            <body>
                <div class="container">
                    <h1>Exercise 2</h1>
                    <form action="" method="POST">
                        <input type="text" name="firstNum" placeholder="Enter first number"><br>
                        <input type="text" name="secondNum" placeholder="Enter second number"><br>
                        <div class="ops">
                            <input type="submit" name="operation" value="Add">
                            <input type="submit" name="operation" value="Subtract">
                            <input type="submit" name="operation" value="Multiply">
                            <input type="submit" name="operation" value="Divide">
                        </div>
                    </form>
            html;
        if (isset($_POST['operation'])) {
            echo '<p class="result">';
            echo $this->controller->model->calculate($_POST['firstNum'], $_POST['firstNum'], $_POST['operation']);
            echo '</p>';
        }
        echo <<<html
                </div>
            </body>
            </html>
            html;
    }
}
