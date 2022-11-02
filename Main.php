<?php

require 'functions/filterInput.php';
require 'functions/FillInfo.php';
require 'functions/Randomizer.php';
require 'Clinic.php';
require 'Person.php';
require 'Patient.php';
require 'Doctor.php';

$information = 'You can run this following commands, just enter number of commands -> ' .
    PHP_EOL . '[1] Get actual list of doctors' .
    PHP_EOL . '[2] Get actual list of patients' .
    PHP_EOL . "[3] Get doctors' detailed information" .
    PHP_EOL . "[4] Get patients' detailed information" .
    PHP_EOL . "[5] Get clinic's name" .
    PHP_EOL . '[6] Commands list' .
    PHP_EOL;

echo 'Welcome, head physician. Database available. Search:' . PHP_EOL;
echo '1 [Update Database]' . PHP_EOL;

echo PHP_EOL . "Enter clinic name -> ";
$nameClinic = readline();
echo PHP_EOL . "Enter the amount of doctors -> ";
$amountDoctors = filterInput();
echo PHP_EOL . "Enter the amount of patients -> ";
$amountPatients = filterInput();


fillInfo($nameClinic, $amountDoctors, $amountPatients);

echo $information;

while (TRUE) {
    echo 'Enter your action: ';
    $input = filterInput();
    if ($input == '1') {
        print_r(Clinic::getFullArrayDoctorsId());
        echo 'Enter the number of the required doctor -> ';
        $id = filterInput();
        $doctorId = Clinic::getDoctorsId($id);
        echo Clinic::getDoctor($doctorId);
    } elseif ($input == '2') {
        print_r(Clinic::getFullArrayPatientsId());
        echo 'Enter the number of the required patient -> ';
        $id = filterInput();
        $patientId = Clinic::getPatientsId($id);
        echo Clinic::getPatient($patientId);
    } elseif ($input == '3') {
        print_r(Clinic::getArrayDoctors());
    } elseif ($input == '4') {
        print_r(Clinic::getArrayPatients());
    } elseif ($input == '5') {
        echo "You are working with clinic " . Clinic::getNameClinic() . " now." . PHP_EOL;
    } elseif ($input == '6') {
        echo $information;
    }
}

