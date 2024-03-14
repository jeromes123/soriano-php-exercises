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
        <h1>Exercise 10</h1>
        <hr>
        <label for="newFileName">Files in Directory:</label>
        <ul>
            <?php
            $controller = new FileController();
            $controller->model->listFiles();
            ?>
        </ul>
        <form action="" method="POST">
            <label for="viewFileName">Enter name of file to view:</label>
            <input type="text" name="viewFileName"><br>
            <input type="submit" name="view" value="View">
        </form>
        <?php
        session_start();
        if (isset($_POST["view"])) {
            $controller->model->readFile("files/" . $_POST['viewFileName']);
        }
        if (isset($_POST["create"])) {
            $controller->model->createFile($_POST['newFileName'], $_POST['newFileContent']);
            header("Location: " . $_SERVER['PHP_SELF']);
        }
        if (isset($_POST["delete"])) {
            $controller->model->deleteFile($_POST['toDeleteFileName']);
            header("Location: " . $_SERVER['PHP_SELF']);
        }
        if (isset($_POST['update'])) {
            $controller->model->updateFile($_SESSION["updateFileName"] , $_POST['updateFileContent']);
            header("Location: " . $_SERVER['PHP_SELF']);
        }
        ?>
        <hr>
        <form action="" method="POST">
            <label for="newFileName">Enter name of new file:</label>
            <input type="text" name="newFileName"><br>
            <label for="newFileContent">Enter new File Content:</label>
            <textarea name="newFileContent"></textarea>
            <input type="submit" name="create" value="Create">
        </form>
        <?php
        if (!isset($_POST['getContent'])) {
            echo '<br>';
            echo '<hr>';
            echo '<form action="" method="POST">';
            echo '<label for="updateFileName">Enter name of file to update:</label>';
            echo '<input type="text" name="updateFileName">';
            echo '<input type="submit" name="getContent" value="Select">';
            echo '</form>';
            echo '<br>';
        } else {
            echo '<form action="" method="POST">';
            echo '<label for="updateFileContent">Enter updated File Content:</label>';
            echo '<textarea name="updateFileContent" class="descTextArea">';
            if (isset($_POST["getContent"])) {
                $filename = "files/" . $_POST["updateFileName"];
                if (file_exists($filename)) {
                    echo htmlentities(file_get_contents($filename));
                } else {
                    echo "File not found!";
                }
                $_SESSION["fileName"] = $_POST["fileName"];
            }
            echo '</textarea>';
            echo '<input type="submit" name="update" value="Update">';
            echo '</form>';
            echo '<br>';
        }
        ?>
        <hr>
        <form action="" method="POST">
            <label for="toDeleteFileName">Enter name of file to delete:</label>
            <input type="text" name="toDeleteFileName">
            <input type="submit" name="delete" value="Delete">
        </form>
    </div>
</body>

</html>
