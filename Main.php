<?php

require 'functions/FillInfo.php';
require 'functions/Randomizer.php';
require 'Clinic.php';
require 'Person.php';
require 'Patient.php';
require 'Doctor.php';

$clinic = new Clinic('Kashenko');

echo 'Welcome, head physician. Database available. Search:' . PHP_EOL;
echo '1 [Update Database]' . PHP_EOL;
echo 'You can run this following commands' .
    PHP_EOL . '[1] Get full doctor information' .
    PHP_EOL . "[2] Get full patient information".
    PHP_EOL;

fillInfo('CareHealth', 2, 5);

while(TRUE) {
    echo 'enter your action: ';
    $input = readline();
    if ($input == '1'){
        print_r(Clinic::getFullArrayDoctorsId());
        echo 'choose doctor id and enter there -> ';
        $id = readline();
        $doctorId = Clinic::getDoctorsId($id);
        echo Clinic::getDoctor($doctorId);
    }
    elseif ($input == '2'){
        print_r(Clinic::getFullArrayPatientsId());
        echo 'choose patient id and enter there -> ';
        $id = readline();
        $patientId = Clinic::getPatientsId($id);
        echo Clinic::getPatient($patientId);
    }
}

