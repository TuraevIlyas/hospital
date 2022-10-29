<?php

require 'functions/Randomizer.php';
require 'functions/FillInfo.php';

spl_autoload_register(function ($className){
    include $className . '.php';
});

echo 'Welcome, head physician. Database available. Search:' . PHP_EOL;
while(TRUE) {
    $clinic = new Clinic();
    $patient = new Patient();
    $input = readline();
}

//Doctor file has an error in __construct()
//Pls fix