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
        <?php
        echo "<ul>";
        foreach ($fileList as $file) {
            echo '<li>' . $file . '</li>';
        }
        echo "</ul>";
        ?>
        <br>
        <hr>
        <form action="" method="POST">
            <label for="toDeleteFileName">Enter name of file to delete:</label>
            <input type="text" name="fileName">
            <input type="submit" name="delete" value="Delete">
        </form>  
        <?php
            if (isset($message)) 
            {
                echo $message;
            }
        ?>
    </div>
</body>

</html>