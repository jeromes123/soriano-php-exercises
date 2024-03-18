<?php
namespace Model;

class HelloModel
{
    public $message = "Hello, World";

    public function getMessage()
    {
        return $this->message;
    }
}
