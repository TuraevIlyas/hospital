<?php

require 'functions/FillInfo.php';
require 'functions/Randomizer.php';
require 'Clinic.php';
require 'Person.php';
require 'Patient.php';
require 'Doctor.php';

echo 'Welcome, head physician. Database available. Search:' . PHP_EOL;
echo '1 [Update Database]' . PHP_EOL;
echo 'You can run this following commands' .
    PHP_EOL . '[1] Get full current doctor information' .
    PHP_EOL . '[2] Get full current patient information'.
    PHP_EOL . '[3] Get full all doctors' .
    PHP_EOL . '[4] Get full all patients' .
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
    elseif ($input =='3'){
        print_r(Clinic::getArrayDoctors());
    }
    elseif ($input == '4'){
        print_r(Clinic::getArrayPatients());
    }
}

