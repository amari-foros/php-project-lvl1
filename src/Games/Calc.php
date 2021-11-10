<?php

namespace Brain\Games\Calc;

use function Brain\Engine\engine;

function countCalculate(): void
{
    $arrayQuestion = [];
    $operators = ['+', '-', '*'];
    for ($i = 0; $i < 3; $i++) {
        $keyOperator = array_rand($operators);
        $randOperation = $operators[$keyOperator];
        $randNum1 = rand(1, 20);
        $randNum2 = rand(1, 20);
        $rand = "{$randNum1} {$randOperation} {$randNum2}";
        if ($randOperation === '+') {
            $trueAnswer = $randNum1 + $randNum2;
        } elseif ($randOperation === '-') {
            $trueAnswer = $randNum1 - $randNum2;
        } else {
            $trueAnswer = $randNum1 * $randNum2;
        }
        $arrayQuestion[] = [$rand, $trueAnswer];
    }

    $rules = 'What is the result of the expression?';
    engine($arrayQuestion, $rules);
}
