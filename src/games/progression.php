<?php

namespace Brain\Games\progression;

use function cli\line;
use function cli\prompt;

function goCalculateProgression()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('What number is missing in the progression?');

    $arrayQuestion = array();
    for ($i = 0; $i < 3; $i++) {
        $num1 = mt_rand(1, 10);
        $step = mt_rand(2, 5);
        $progression1 = array($num1, $num1 + $step, $num1 + 2 * $step, $num1 + 3 * $step, $num1 + 4 * $step, $num1 + 5 * $step);
        $randKey = array_rand($progression1);
        $trueAnswer1 = $progression1[$randKey];
        foreach ($progression1 as $key => $item) {
            if ($key == $randKey) {
                $progression1[$randKey] = '..';
            }
        }
        $rand1 = implode(' ', $progression1);
        $arrayQuestion[] = [$rand1, $trueAnswer1];
    }

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