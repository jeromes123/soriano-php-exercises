<?php
namespace View;

use Controller\HelloController;

class HelloView
{
    public $controller;

    public function __construct()
    {
        $this->controller = new HelloController();
    }

    public function render()
    {
        echo <<<html
        <!DOCTYPE html>
        <head>
            <title>Exercise 1</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
            <h1>Exercise 1</h1>
            <div class="message-box">
                <p class="message-text">
        html;

        echo $this->controller->model->getMessage();

        echo <<<html
                </p>
            </div>
        </body>
        </html>
        html;
    }
}
