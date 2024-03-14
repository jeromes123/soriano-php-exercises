<?php
class SortModel
{
    function sort($array)
    {
        $numbersArr = explode(" ", $array);
        $length = count($numbersArr);
        for ($i = 1; $i < $length; $i++) {
            $key = $numbersArr[$i];
            $j = $i - 1;
            while ($j >= 0 && $numbersArr[$j] > $key) {
                $numbersArr[$j + 1] = $numbersArr[$j];
                $j--;
            }
            $numbersArr[$j + 1] = $key;
        }
        return $numbersArr;
    }
}
