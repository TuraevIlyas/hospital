<?php
spl_autoload_register(function ($className){
    include $className . '.php';
});
echo 'Welcome, head physician. Database available. Search:' . PHP_EOL;
while(TRUE) {
    $clinic = new Clinic();
    $doctor = new Doctor();
    $patient = new Patient();
    readline();
}

//Pacient file non-existent
//Doctor file has an error in __construct()
//Pls fix