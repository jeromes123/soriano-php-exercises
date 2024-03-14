<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 2</title>
</head>
<body>
    <div class="container">
        <h1>Exercise 2</h1>
        <form action="" method="POST">
            <input type="text" name="firstNum" placeholder="Enter first number"><br>
            <input type="text" name="secondNum" placeholder="Enter second number"><br>
            <div class="ops">
                <input type="submit" name="operation" value="Add">
                <input type="submit" name="operation" value="Subtract">
                <input type="submit" name="operation" value="Multiply">
                <input type="submit" name="operation" value="Divide">
            </div>
        </form>
        <?php 
        if (isset($result))
        {
           echo '<p class="result">';
           echo $result;
           echo '</p>';
        }
        ?>
    </div>
</body>
</html>