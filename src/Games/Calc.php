<?php

namespace Brain\Games\Calc;

use function Brain\Engine\engine;

function countCalculate()
{
    $operators = ['+', '-', '*'];
    $keyOperator = array_rand($operators, 3);
    $operatorRand1 = $operators[$keyOperator[0]];
    $operatorRand2 = $operators[$keyOperator[1]];
    $operatorRand3 = $operators[$keyOperator[2]];
    $rand1 = (mt_rand(0, 20) . $operatorRand1 . mt_rand(0, 20));
    $rand2 = (mt_rand(0, 20) . $operatorRand2 . mt_rand(0, 20));
    $rand3 = (mt_rand(0, 20) . $operatorRand3 . mt_rand(0, 20));
    $trueAnswer1 = eval("return $rand1;");
    $trueAnswer2 = eval("return $rand2;");
    $trueAnswer3 = eval("return $rand3;");
    $arrayRand1 = [$rand1, $trueAnswer1];
    $arrayRand2 = [$rand2, $trueAnswer2];
    $arrayRand3 = [$rand3, $trueAnswer3];
    $arrayQuestion = [$arrayRand1, $arrayRand2, $arrayRand3];

    $rules = 'What is the result of the expression?';
    engine($arrayQuestion, $rules);
}