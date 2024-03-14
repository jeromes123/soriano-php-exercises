<?php
class LoginModel
{
    function validate($username, $password)
    {
        include "src/AccountsTbl.php";
        foreach ($accounts as $account) {
            if ($username == $account->username && $password == $account->password) {
                return "Account has a match";
            }
        }
        return "Account has no match";
    }
}
