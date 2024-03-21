<?php
namespace Controller;

use Model\StrModel;

class StrController
{
    public $model;

    public function __construct()
    {
        $this->model = new StrModel("I am a test STRING");
    }
}
