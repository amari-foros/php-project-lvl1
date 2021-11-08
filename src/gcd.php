<?php

namespace Brain\Games\gcd;

use function cli\line;
use function cli\prompt;

function isGcd(int $n, int $m)
{
    if ($m > 0) {
        return isGcd($m, $n % $m);
    } else {
        return abs($n);
    }
}

function goCalculateGcd()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Find the greatest common divisor of given numbers.');

    $num1 = mt_rand(1, 100);
    $num2 = mt_rand(1, 100);
    $rand1 = $num1 . " " . $num2;

    $num3 = mt_rand(1, 100);
    $num4 = mt_rand(1, 100);
    $rand2 = $num3 . " " . $num4;

    $num5 = mt_rand(1, 100);
    $num6 = mt_rand(1, 100);
    $rand3 = $num5 . " " . $num6;

    $trueAnswer1 = isGcd($num1, $num2);
    $trueAnswer2 = isGcd($num3, $num4);
    $trueAnswer3 = isGcd($num5, $num6);

    $arrayRand1 = [$rand1, $trueAnswer1];
    $arrayRand2 = [$rand2, $trueAnswer2];
    $arrayRand3 = [$rand3, $trueAnswer3];
    $arrayQuestion = [$arrayRand1, $arrayRand2, $arrayRand3];

    foreach ($arrayQuestion as $arrayRand) {
        line("Question: %s", $arrayRand[0]);
        $answer = prompt('Your answer ');
        if ($arrayRand[1] != $answer) {
            line("'$answer' is wrong answer ;(. Correct answer was '$arrayRand[1]'.");
            line("Let's try again, %s!", $name);
            break;
        } else {
            line("Correct!");
        }
        if (!next($arrayQuestion)) {
            line("Congratulations, %s!", $name);
        }
    }
}
