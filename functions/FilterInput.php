<?php

function filterInput()// Checking input type
{
    $input = readline();

    while (!is_numeric($input)) {

        if ($input == 'exit') { // Program exit initialization
            echo 'You have left the program. Goodbye';
            exit;
        }
        echo 'Error: the numeric input needed.' . PHP_EOL . "Try again: ";
        $input = readline();
    }
    return $input;
}
