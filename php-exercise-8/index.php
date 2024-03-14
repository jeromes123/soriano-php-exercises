<?php
include "Controller/DateController.php";
session_start();
$controller = new DateController();
$controller->render();
