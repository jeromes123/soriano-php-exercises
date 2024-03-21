<?php
namespace View;

use Controller\StrController;

class StrView
{
    public $controller;
    public function __construct()
    {
        $this->controller = new StrController();
    }

    public function render()
    {
        echo <<<html
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Exercise 9</title>
            </head>
            <body>
                <h1>Exercise 9</h1>
        html;
        echo $this->controller->model->getResult();
        echo <<<html
            </body>
            </html>
            html;
    }
}
