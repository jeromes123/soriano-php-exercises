<?php
namespace Controller;

use Model\HelloModel;

class HelloController
{
    public $model;

    public function __construct()
    {
        $this->model = new HelloModel();
    }
}
