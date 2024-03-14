<?php
class DateModel
{
    public function displayDates()
    {
        $result =  date("Y-m-d");
        $result .= "<br>";
        $result .= date("m/d/Y"); // Outputs: 03/05/2024
        $result .= "<br>";
        $result .= date("d/m/Y"); // Outputs: 05/03/2024
        $result .= "<br>";
        $result .= date("l, F j, Y"); // Outputs: Tuesday, March 5, 2024
        $result .= "<br>";
        $result .= date("D, M j, Y"); // Outputs: Tues, Mar 5, 2024
        $result .= "<br>";
        return $result;
    }
}
