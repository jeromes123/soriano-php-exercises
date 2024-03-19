<?php
namespace View;
use Controller\FileController;

class FileViewView {
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
                        <h1>View a file</h1>
                        <label for="newFileName">Files in Directory:</label>
                        <br>
                html;

        echo "<ul>";
        $fileList = $this->controller->model->listFiles();
        foreach ($fileList as $file) {
            echo '<li>' . $file . '</li>';
        }
        echo "</ul>";

        echo <<<html
                <br>
                <hr>
                <form action="" method="POST">
                    <label for="viewFileName">Enter name of file to view:</label>
                    <input type="text" name="fileName"><br>
                    <input type="submit" name="view" value="View">
                </form>
        html;

        // Display file content if "View" button is clicked
        if(isset($_POST['view'])) {   
            $fileName = $_POST['fileName'];
            $fileContent = $this->controller->model->readFile($fileName);
            if ($fileContent !== false) {
                echo "<h2>Content of $fileName:</h2>";
                echo "<pre>$fileContent</pre>";
            } else {
                echo "<p>File '$fileName' not found!</p>";
            }
        }

        echo <<<html
                    </div>
                </body>
                </html>
        html;
    }
}
