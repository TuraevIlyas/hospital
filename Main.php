<?php

require_once 'Person.php';
require_once 'Doctor.php';
require_once 'Clinic.php';

//spl_autoload_register(function ($className){
//    include $className . '.php';
//});

$clinic = new Clinic('Kashenko');

echo 'Welcome, head physician. Database available. Search:' . PHP_EOL;
echo '1 [Update Database]' . PHP_EOL;
echo '2 [Doctors]' . PHP_EOL;

while(TRUE) {

    $input = readline();

    if ($input === 1){
        return fillInfo();
    }
    elseif ($input === 2){
        return getDoctor();
    }
    elseif ($input === 'exit'){
        exit;
    }
    else {
        echo '---' . PHP_EOL;
    }

}

