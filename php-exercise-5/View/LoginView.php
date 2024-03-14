<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 5</title>
    <!-- <link rel="stylesheet" href="style.css" /> ChatGPT Design-->
</head>

<body>
    <form action="" method="POST" name="loginform">
        <h1>Exercise 5</h1>
        <table class="center">
            <tr>
                <td><input type="text" name="username" placeholder="Username"></td>
            </tr>
            <tr>
                <td><input type="password" name="password" placeholder="Password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Login"></td>
            </tr>
        </table>
        <?php
        if (isset($result)) {
           echo $result;
        }
        ?>
    </form>
</body>

</html>
