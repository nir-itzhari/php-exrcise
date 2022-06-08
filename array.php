<?php

function arrayNumber($maxNumber)
{
    $arr = [];

    for ($i = 1; $i <= $maxNumber; $i++) {
        $arr[] = $i;
    }
    return $arr;
}


function sum($arrOfNumbers)
{
    $sum = 0;
    foreach ($arrOfNumbers as $value) {
        $sum += $value;
    }

    return $sum;
}

function getAvg($sumOfNumber, $arrOfNumbers)
{
    $avg = 0;

    $avg = $sumOfNumber / count($arrOfNumbers);

    return $avg;
}
