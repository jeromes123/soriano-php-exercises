<?php
namespace View;
use Controller\FileController;

class FileDeleteView {
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
                        <h1>Delete a file</h1>
                        <label for="newFileName">Files in Directory:</label>
                        <br>
        html;

        echo "<ul>";
        $fileList = $this->controller->model->listFiles(); // Corrected $this->controller to $this->fileController
        foreach ($fileList as $file) {
            echo '<li>' . $file . '</li>';
        }
        echo "</ul>";

        echo <<<html
                <br>
                <hr>
                <form action="" method="POST">
                    <label for="toDeleteFileName">Enter name of file to delete:</label>
                    <input type="text" name="fileName">
                    <input type="submit" name="delete" value="Delete">
                </form>  
        html;

        if (isset($_POST['delete'])) {
            $this->controller->model->deleteFile($_POST['fileName']); // Corrected $fileName to $_POST['fileName']
            echo "File is deleted!";
        }
        
        echo <<<html
                    </div>
                </body>

                </html>
        html;
    }
}
