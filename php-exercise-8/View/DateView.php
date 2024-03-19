<?php
namespace View;
use Controller\DateController;

class DateView{
    public $controller;
    public function __construct(){
        $this->controller = new DateController();
    }

    public function render(){
        echo <<<html
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Exercise 8</title>
            </head>
            <body>
                <h1>Exercise 8</h1>
            html;
        echo $this->controller->model->displayDates();
        echo <<<html
            </body>
            </html>
            html;
    }
}
