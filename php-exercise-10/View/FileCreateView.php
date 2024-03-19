<?php
namespace View;
use Controller\FileController;

class FileCreateView {
    public $controller;
    public function __construct() {
        $this->controller = new FileController();
    }

    public function render() {
        echo <<<html
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="style.css">
                <title>Exercise 10</title>
            </head>
            <body>
                <div class="container">
                    <h1>Create a new file</h1>
                    <label for="newFileName">Files in Directory:</label>
                    <br>
                    <?php
                    echo "<ul>";
            html;
        $fileList = $this->controller->model->listFiles();
        foreach ($fileList as $file) {
            echo '<li>' . $file . '</li>';
        }
        echo "</ul>";
        echo <<<html
                    <br>
                    <hr>
                    <form action="" method="POST">
                        <label for="fileName">Enter name of new file:</label>
                        <input type="text" name="fileName"><br>
                        <label for="fileContent">Enter new File Content:</label>
                        <textarea name="fileContent"></textarea>
                        <input type="submit" name="create" value="Create">
                    </form>   
                html;
        if(isset($_POST['create'])) 
        {   
            $this->controller->model->createFile($_POST['fileName'], $_POST['fileContent']);
            echo "New File Created!";
        }
        echo <<<html
                </div>
            </body>
            </html>
            html;
    }
}