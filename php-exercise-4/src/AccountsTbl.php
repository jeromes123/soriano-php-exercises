<?php
    include_once "Account.php";
    $account1 = new Account("Johnny25", "123superman");
    $account2 = new Account("Michael", "Jackson");
    $account3 = new Account("Joey", "12345");
    $accounts = [$account1, $account2, $account3];