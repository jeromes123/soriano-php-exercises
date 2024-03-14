<?php
class InfoModel
{
    public function displayInfo($name, $email, $message)
    {
        $result = "Name: " . $name . "<br>";
        $result .= "Email: " . $email . "<br>";
        $result .= "Message: " . $message . "<br>";

        return  $result;
    }
}
