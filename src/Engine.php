<?php

namespace PhpProject45\Engine;

function games_Question($question) //вопрос игры
{
    print_r($question);
}

function games_Condition($condition, $count, $answer, $trueAnswer, $name) //выполнение проверки
{
    if ($condition) {
        print_r("Correct!\n");
        $count++;
    } else {
        print_r("'$answer' is wrong answer ;(. Correct answer was '$trueAnswer'.\nLet's try again, $name!\n");
        return false;
    }
    return $count;
}

function games_Nod($num1, $num2)
{
    while ($num1 !== $num2) {
        if ($num1 > $num2) {
            $num1 = $num1 - $num2;
        } else {
            $num2 = $num2 - $num1;
        }
    }
    return (string) $num1;
}

function games_Progress()
{
    $arr = [];
    $value = rand(1, 20);
    $step = rand(1, 5);
//    $hide = rand(0, 9);
    while (count($arr) < 10) {
        $value += $step;
        $arr[] = $value;
    }
    return $arr;
}

function gamesPrime($num)
{
    $true = "yes";
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i === 0) {
            $true = 'no';
            break;
        }
    }
    return $true;
}
