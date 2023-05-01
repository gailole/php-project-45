<?php

namespace PhpProject45\Cli;

use function cli\line;
use function cli\prompt;

function sayName() {
$name = prompt('May I have your name?');
line("Hello, %s!", $name);
}
