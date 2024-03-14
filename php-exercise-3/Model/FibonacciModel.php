<?php
class FibonacciModel
{
    public function createSequence($firstN)
    {
        $tempArr = [$firstN];
        for ($i = 0; $i < $firstN; $i++) {
            if ($i == 0) {
                $tempArr[$i] = 0;
                continue;
            } else if ($i == 1) {
                $tempArr[$i] = 1;
                continue;
            }
            $tempArr[$i] = $tempArr[$i - 1] + $tempArr[$i - 2];
        }
        return $tempArr;
    }
}
