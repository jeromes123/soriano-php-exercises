<?php
namespace Model;
class CalculatorModel
{
    public function calculate($a, $b, $operation)
    {
        switch (strtolower($operation)) {
            case "add":
                return $a + $b;
            case "subtract":
                return $a - $b;
            case "multiply":
                return $a * $b;
            case "divide":
                if ($b != 0) {
                    return $a / $b;
                } else {
                    return "Cannot divide by zero";
                }
            default:
                return "Invalid operation";
        }
    }
}
