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
        <h1>Update a file</h1>
        <label for="newFileName">Files in Directory:</label>
        <br>
        <?php
        echo "<ul>";
        foreach ($fileList as $file) {
            echo '<li>' . $file . '</li>';
        }
        echo "</ul>";
        ?>
        <br>
        <hr>
        <?php
        if (!isset($_POST['getContent'])) {
            echo '<br>';
            echo '<hr>';
            echo '<form action="" method="POST">';
            echo '<label for="fileName">Enter name of file to update:</label>';
            echo '<input type="text" name="fileName">';
            echo '<input type="submit" name="getContent" value="Select">';
            echo '</form>';
            echo '<br>';
        } else {
            echo '<form action="" method="POST">';
            echo '<label for="fileContent">Enter updated File Content:</label>';
            echo '<input type="text" name="fileName" value="';
            echo $_POST["fileName"];
            echo '" placeholder="';
            echo $_POST["fileName"];
            echo '"readonly>';
            echo '<textarea name="fileContent" class="descTextArea">';
            if (isset($_POST["getContent"])) {
                $filename = "files/" . $_POST["fileName"];
                if (file_exists($filename)) {
                    echo htmlentities(file_get_contents($filename));
                } else {
                    echo "File not found!";
                }
            }
            echo '</textarea>';
            echo '<input type="submit" name="update" value="Update">';
            echo '</form>';
            echo '<br>';
        }

        if(isset($message))
        {
            echo $message;
        }
        ?>   
    </div>
</body>

</html>