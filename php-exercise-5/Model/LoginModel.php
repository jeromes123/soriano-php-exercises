<?php
class LoginModel
{
    public function validate($username, $password)
    {
        include "src/AccountsTbl.php";

        if (empty($username) || empty($password)) {
            return "Username and password cannot be empty.";
        }

        if (strlen($username) < 6) {
            
            return "Username must be at least 6 characters.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $username)) {
            return "Username can only contain letters and numbers.";
        }

        foreach ($accounts as $account) {
            if ($username == $account->username) {
                if ($password == $account->password) {
                    return "Account has a match.";
                } else {
                    return "Incorrect password.";
                }
            }
        }
        return "Username does not exist.";
    }
}
