<?php

namespace Brain\Games\game;

use function cli\line;
use function cli\prompt;

function goAnswerTheQuestions()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("Answer 'yes' if the number is even, otherwise answer 'no'.");
    $rand1 = mt_rand();
    $rand2 = mt_rand();
    $rand3 = mt_rand();
    if ($rand1 % 2 == 0) {
        $arrayRand1 = [$rand1, 'yes'];
    } else {
        $arrayRand1 = [$rand1, 'no'];
    }
    if ($rand2 % 2 == 0) {
        $arrayRand2 = [$rand2, 'yes'];
    } else {
        $arrayRand2 = [$rand2, 'no'];
    }
    if ($rand3 % 2 == 0) {
        $arrayRand3 = [$rand3, 'yes'];
    } else {
        $arrayRand3 = [$rand3, 'no'];
    }

    $arrayQuestion = [$arrayRand1, $arrayRand2, $arrayRand3];
    foreach ($arrayQuestion as $arrayRand) {
        $answer = prompt('Question:', $arrayRand[0]);
        if ($arrayRand[1] != $answer) {
            line("'$answer' is wrong answer ;(. Correct answer was '$arrayRand[1]'.");
            line("Let's try again, %s!", $name);
            break;
        } else {
            line("Correct!");
        }
        if(!next($arrayQuestion)) {
            line("Congratulations, %s!", $name);
        }
    }
}