<?php

require 'Randomizer.php';

spl_autoload_register(function ($className){
    include '../' . $className . '.php';
});

function fillInfo($nameClinic, $amountDoctors, $amountPatients): void {
    $clinic = new Clinic($nameClinic);
    for ($i=1; $i<=$amountDoctors; $i++){
         $doctor = new Doctor();
         $doctor->fillMembers(
             // array
         );
         $clinic->setArrayDoctors(
             personId: $doctor->getPersonId(),
             name: $doctor->getName(),
             surname: $doctor->getSurname(),
             specialization: $doctor->getSpecialization()
         );
    }
    for ($a=1; $a <= $amountPatients; $a++){
        $patient = new Patient(fillMembers('name'), fillMembers('surname'), fillMembers('gender'),
            fillMembers('age'));
        $patient->setDiseases(fillMembers('illnesses'));
        $clinic->setArrayPatients($patient->getPersonId(), $patient->getName(), $patient->getSurname());
    }
}
fillInfo('CareHealth', 3, 13);
print_r(Clinic::getArrayDoctors()); // TODO: make don't static
print_r(Clinic::getArrayPatients()); // TODO: make don't static