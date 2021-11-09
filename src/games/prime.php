<?php

namespace Brain\Games\prime;

use function cli\line;
use function cli\prompt;
use function src\Engine\run;
use function src\Engine\engine;

function goNumberIsPrime()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if given number is prime. Otherwise answer "no".');

    $arrayQuestion = array();
    for ($i = 0; $i < 3; $i++) {
        $rand = mt_rand(2, 19);
        if ($rand == 2 || $rand == 3 || $rand == 5 || $rand == 7 || $rand == 11 || $rand == 13 || $rand == 17 || $rand == 19) {
            $trueAnswer = "yes";
        } else {
            $trueAnswer = "no";
        }
        $arrayQuestion[] = [$rand, $trueAnswer];
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