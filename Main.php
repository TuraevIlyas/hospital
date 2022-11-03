<?php

//require 'functions/FilterInput.php';
//require 'functions/FillInfo.php';
//require 'functions/Randomizer.php';
require 'CommonFunc.php';
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

echo PHP_EOL . "Enter clinic name -> ";
$nameClinic = readline();
echo PHP_EOL . "Enter the amount of doctors -> ";
$amountDoctors = CommonFunc::filterInput();
echo PHP_EOL . "Enter the amount of patients -> ";
$amountPatients = CommonFunc::filterInput();


$clinic = CommonFunc::fillInfo($nameClinic, $amountDoctors, $amountPatients);

echo $information;

while (TRUE) {
    echo 'Enter your action: ';
    $input = CommonFunc::filterInput();
    if ($input == '1') {
        print_r($clinic->getFullArrayDoctorsId());
        echo 'Enter the number of the required doctor -> ';
        $id = CommonFunc::filterInput();
        $doctorId = $clinic->getDoctorsId(count: $id);
        echo $clinic->getDoctor(personId: $doctorId);
    } elseif ($input == '2') {
        print_r($clinic->getFullArrayPatientsId());
        echo 'Enter the number of the required patient -> ';
        $id = CommonFunc::filterInput();
        $patientId = $clinic->getPatientsId(count: $id);
        echo $clinic->getPatient(personId: $patientId);
    } elseif ($input == '3') {
        print_r($clinic->getArrayDoctors());
    } elseif ($input == '4') {
        print_r($clinic->getArrayPatients());
    } elseif ($input == '5') {
        echo "You are working with clinic " . $clinic->getNameClinic() . " now." . PHP_EOL;
    } elseif ($input == '6') {
        echo $information;
    }
}

