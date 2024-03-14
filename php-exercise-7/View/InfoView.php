<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 7</title>
    <!-- <link rel="stylesheet" href="style.css"> ChatGPT design-->
</head>

<body>
    <h1>Exercise 7</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Message:</td>
                <td><textarea name="message"></textarea></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($result)){
            echo $result;
        }
    ?>
</body>

</html>
