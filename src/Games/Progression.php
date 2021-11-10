<?php

namespace Brain\Games\Progression;

use function Brain\Engine\engine;

function calculateProgression(): void
{
    $arrayQuestion = [];
    for ($i = 0; $i < 3; $i++) {
        $num1 = mt_rand(1, 10);
        $step = mt_rand(2, 5);
        $progression1 = array($num1, $num1 + $step, $num1 + 2 * $step, $num1 + 3 * $step,
        $num1 + 4 * $step, $num1 + 5 * $step);
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
    $rules = "What number is missing in the progression?";
    engine($arrayQuestion, $rules);
}
