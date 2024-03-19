<?php
namespace Controller;
use Model\SortModel;

class SortController
{
    public $model;

    public function __construct()
    {
        $this->model = new SortModel();
    }
}
