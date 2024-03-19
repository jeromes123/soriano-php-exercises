<?php
namespace Controller;
use Model\InfoModel;
class InfoController
{
    public $model;

    public function __construct()
    {
        $this->model = new InfoModel();
    }
}