<?php

require 'CommonFunc.php';
require 'Clinic.php';
require 'Person.php';
require 'Patient.php';
require 'Doctor.php';

$information = 'You can run these following commands, just enter number of commands -> ' .
    PHP_EOL . '[1] Get actual list of doctors' .
    PHP_EOL . '[2] Get actual list of patients' .
    PHP_EOL . "[3] Get doctors' detailed information" .
    PHP_EOL . "[4] Get patients' detailed information" .
    PHP_EOL . "[5] Get clinic's name" .
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
    switch ($input) {
        case 1:
            print_r($clinic->getFullArrayDoctorsId());
            echo 'Enter the number of the required doctor -> ';
            $id = CommonFunc::filterInput();
            $doctorId = $clinic->getDoctorsId(count: $id);
            echo $clinic->getDoctor(personId: $doctorId);
            break;
        case 2:
            print_r($clinic->getFullArrayPatientsId());
            echo 'Enter the number of the required patient -> ';
            $id = CommonFunc::filterInput();
            $patientId = $clinic->getPatientsId(count: $id);
            echo $clinic->getPatient(personId: $patientId);
            break;
        case 3:
            print_r($clinic->getArrayDoctors());
            break;
        case 4:
            print_r($clinic->getArrayPatients());
            break;
        case 5:
            echo "You are working with '" . $clinic->getNameClinic() . "' now." . PHP_EOL;
            break;
    }
}

