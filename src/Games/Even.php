<?php

namespace Brain\Games\Even;

use function Brain\Engine\engine;

function numberIsEven()
{
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

    $rules = 'Answer "yes" if the number is even, otherwise answer "no".';
    engine($arrayQuestion, $rules);
}
