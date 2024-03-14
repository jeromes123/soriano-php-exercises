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
            <label for="viewFileName">Enter name of file to view:</label>
            <input type="text" name="fileName"><br>
            <input type="submit" name="view" value="View">
            <?php
            if(isset($fileContent))
            {   
                echo $fileContent;
            }
            ?>
        </form>
    </div>
</body>

</html>