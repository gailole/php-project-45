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
        $count = 0;
    }
    return $count;
}