<?php
    include "Model/FileModel.php";
    
    class FileController 
    {
        public $model;

        function  __construct() 
        {
            $this->model = new FileModel();
        }

        function fileViewViewRender() 
        {
            $fileList = $this->model->listFiles();
            require_once "View/FileViewView.php";
            if(isset($_POST["view"])){
                $fileContent = readfile("files/" . $_POST['fileName']);
            }
        }

        function fileCreateViewRender() 
        {
            $fileList = $this->model->listFiles();
            if(isset($_POST["create"])){
                $message = $this->model->createFile($_POST['fileName'], $_POST['fileContent']);
                header("Location: " . $_SERVER['PHP_SELF']);
            }
            require_once "View/FileCreateView.php";
        }

        function fileUpdateViewRender() 
        {   
            $fileList = $this->model->listFiles();
            if(isset($_POST["update"])){
                $message = $this->model->updateFile($_POST['fileName'], $_POST['fileContent']);
            }
            require_once "View/FileUpdateView.php";
        }

        function fileDeleteViewRender() 
        {   
            $fileList = $this->model->listFiles();
            if(isset($_POST["delete"])){
                $message = $this->model->deleteFile($_POST['fileName']);
                header("Location: " . $_SERVER['PHP_SELF']);
            }
            require_once "View/FileDeleteView.php";
        }

        function renderAll() 
        {   
            $this->fileViewViewRender();
            $this->fileCreateViewRender();
            $this->fileUpdateViewRender();
            $this->fileDeleteViewRender();
        }
    }
    