<?php

require 'Randomizer.php';

spl_autoload_register(function ($className){
    include '../' . $className . '.php';
});

function fillInfo(int $amountDoctors, int $amountPatients): void {
    for ($i=1; $i<=$amountDoctors; $i++){
         $doctor = new Doctor(fillMembers('name'), fillMembers('surname'), fillMembers('gender'),
            fillMembers('age'), fillMembers('specialization'));
         Clinic::setArrayDoctors($doctor->getPersonId(), $doctor->getName(), $doctor->getSurname(), $doctor->getSpecialization());
    }
    for ($a=1; $a <= $amountPatients; $a++){
        $patient = new Patient(fillMembers('name'), fillMembers('surname'), fillMembers('gender'),
            fillMembers('age'));
        $patient->setDiseases(fillMembers('illnesses'));
        Clinic::setArrayPatients($patient->getPersonId(), $patient->getName(), $patient->getSurname());
    }
}
fillInfo(3, 13);
print_r(Clinic::getArrayDoctors());
print_r(Clinic::getArrayPatients());