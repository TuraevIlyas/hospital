<?php

require 'Randomizer.php';
require  '..\Clinic.php';
require '..\Person.php';
require '..\Doctor.php';
require '..\Patient.php';


function fillInfo(string $nameClinic,int $amountDoctors, int $amountPatients): void {
    $clinic = new Clinic($nameClinic);
    echo 'Welcome to the '. $clinic -> getNameClinic() . PHP_EOL;
    for ($i=1; $i<=$amountDoctors; $i++)
    {
        $doctor = new Doctor(fillMember());
        Clinic::setArrayDoctors(
            $doctor->getPersonId(),
            $doctor->getName(),
            $doctor->getSurname(),
            $doctor->getSpecialization(),
            $doctor->getArrayDoctorPatient()
        );
    }
    for ($a=1; $a <= $amountPatients; $a++)
    {
        $patient = new Patient(fillMember());
        $patient->setDiseases();
        Clinic::setArrayPatients(
            $patient->getPersonId(),
            $patient->getName(),
            $patient->getSurname(),
            $patient->getDiseases()
        );
        $count = rand(0, $amountDoctors - 1);
        $id = Clinic::getArrayKeysDoctors();
        Clinic::addPatientToDoctor($id[$count], $patient->getSurname());
    }
}
fillInfo('CareHealth',2,5);
print_r(Clinic::getArrayDoctors());
print_r(Clinic::getArrayPatients());