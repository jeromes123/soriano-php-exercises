<?php
namespace View;

use Controller\SortController;

class SortView
{
    public $controller;
    public function __construct()
    {
        $this->controller = new SortController();
    }

    public function render()
    {
        echo <<<html
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Exercise 6</title>
                <link rel="stylesheet" href="style.css">
            </head>
            <body>
                <h1>Exercise 6</h1>
                <form action="" method="POST">
                    <div class="light">
                        <div class="glow"></div>
                    </div>
                    <table>
                        <tr>
                            <td>Enter numbers to sort, separated by spaces: </td>
                            <td><input type="text" name="numbers"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="submit" value="submit" ></td>
                        </tr>
                    </table>
        html;

        if (isset($_POST['submit'])) {
            $result = implode(", ", $this->controller->model->sort($_POST['numbers']));
            echo $result; 
        }

        echo <<<html
                </form>
            </body>
            </html>
        html;
    }
}
