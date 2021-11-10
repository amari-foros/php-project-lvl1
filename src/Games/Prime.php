<?php

namespace Brain\Games\Prime;

use function Brain\Engine\engine;


function numberIsPrime()
{
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
    $rules = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    engine($arrayQuestion, $rules);
}