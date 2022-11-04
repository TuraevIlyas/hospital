<?php

require 'FillFunctions.php';
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
$amountDoctors = FillFunctions::filterInput();
echo PHP_EOL . "Enter the amount of patients -> ";
$amountPatients = FillFunctions::filterInput();


$clinic = FillFunctions::fillInfo($nameClinic, $amountDoctors, $amountPatients);

echo $information;

while (true) {
    echo PHP_EOL . 'Enter your action -> ';
    $inputData = FillFunctions::filterInput();
    switch ($inputData) {
        case 1:
            echo str_replace(['Array', '(', ')'],'',print_r($clinic->getFullArrayDoctorsId(),true));
            echo 'Enter the number of the required doctor -> ';
            $inputId = FillFunctions::filterInput();
            $doctorId = $clinic->getDoctorsId(count: $inputId);
            echo "=> " . $clinic->getDoctor(personId: $doctorId);
            break;
        case 2:
            echo str_replace(['Array', '(', ')'],'',print_r($clinic->getFullArrayPatientsId(),true));
            echo 'Enter the number of the required patient -> ';
            $inputId = FillFunctions::filterInput();
            $patientId = $clinic->getPatientsId(count: $inputId);
            echo "=> " . $clinic->getPatient(personId: $patientId);
            break;
        case 3:
            echo str_replace(['Array', '(', ')'],'',print_r($clinic->getArrayDoctors(),true));
            break;
        case 4:
            echo str_replace(['Array', '(', ')'],'',print_r($clinic->getArrayPatients(),true));
            break;
        case 5:
            echo "=> You are working with '" . $clinic->getNameClinic() . "' now." . PHP_EOL;
            break;
    }
}

