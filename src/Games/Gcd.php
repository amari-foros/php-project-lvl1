<?php

namespace Brain\Games\Gcd;

use function Brain\Engine\engine;

function isGcd($n, $m)
{
    if ($m > 0) {
        return isGcd($m, $n % $m);
    } else {
        return abs($n);
    }
}

function calculateGcd()
{
    $num1 = mt_rand(2, 100);
    $num2 = mt_rand(2, 100);
    $rand1 = $num1 . " " . $num2;

    $num3 = mt_rand(2, 100);
    $num4 = mt_rand(2, 100);
    $rand2 = $num3 . " " . $num4;

    $num5 = mt_rand(2, 100);
    $num6 = mt_rand(2, 100);
    $rand3 = $num5 . " " . $num6;

    $trueAnswer1 = isGcd($num1, $num2);
    $trueAnswer2 = isGcd($num3, $num4);
    $trueAnswer3 = isGcd($num5, $num6);

    $arrayRand1 = [$rand1, $trueAnswer1];
    $arrayRand2 = [$rand2, $trueAnswer2];
    $arrayRand3 = [$rand3, $trueAnswer3];
    $arrayQuestion = [$arrayRand1, $arrayRand2, $arrayRand3];

    $rules = 'Find the greatest common divisor of given numbers.';
    engine($arrayQuestion, $rules);
}
