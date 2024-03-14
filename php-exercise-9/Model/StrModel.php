<?php
class StrModel {
    public $testStr;
    
    public function __construct($testStr) {
        $this->testStr = $testStr;
    }

    function printStr(){
        return "Original String: ".$this->testStr."<br>";
    }

    function printLength(){
        return "Length: ".strlen($this->testStr)."<br>"; // Use strlen() to get the length of the string
    }

    function printToLowercase(){
        return "To Lowercase: ".strtolower($this->testStr)."<br>"; // Use strtolower() to convert to lowercase
    }

    function printToUppercase(){
        return "To Uppercase: ".strtoupper($this->testStr)."<br>"; // Use strtoupper() to convert to uppercase
    }

    function printUppercaseFirst(){
        return "Uppercase first: ".ucfirst($this->testStr)."<br>"; // Use ucfirst() to uppercase the first character
    }

    function printLowercaseFirst(){
        return "Lowercase first: ".lcfirst($this->testStr)."<br>"; // Use lcfirst() to lowercase the first character
    }

    function printUppercaseEveryWord(){
        return "Uppercase every word: ".ucwords($this->testStr)."<br>"; // Use ucwords() to uppercase every word
    }

    function printReversedString(){
        return "Reversed String: ".strrev($this->testStr)."<br>"; // Use strrev() to reverse the string
    }
}
