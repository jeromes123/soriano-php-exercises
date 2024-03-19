<?php
namespace View;

use Controller\FibonacciController;

class FibonacciView
{
    public $controller;
    public function __construct()
    {
        $this->controller = new FibonacciController();
    }

    public function render()
    {
        echo <<<html
                <!DOCTYPE html>
                <html lang="en">
                <head>        
                    <title>Exercise 3</title>
                    <!-- 
                    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=VT323&display=swap">
                    <link rel="stylesheet" href="style.css">
                    Design by ChatGPT    -->
                </head>
                <body>
                    <h1>Exercise 3</h1>
                    <form action="" method="post" name="input">
                        <input type="text" name="input">
                        <input type="submit" name="submit">
                    </form>
                html;
        if (isset($_POST['submit'])) {
            echo $this->controller->getSequence($_POST['input']);
        }
        echo <<<html
                </body>
                </html>
                html;
    }
}
