<?php

namespace PhpProject45\Cli;

use function cli\line;
use function cli\prompt;

function sayName()
{
    print_r("Welcome to the Brain Games!\n");
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}
