<?php

//require 'Randomizer.php';
//require  '..\Clinic.php';
//require '..\Person.php';
//require '..\Doctor.php';
//require '..\Patient.php';
//

function fillInfo(string $nameClinic,int $amountDoctors, int $amountPatients): void {
    Clinic::setNameClinic($nameClinic);
    echo 'Welcome to the '. Clinic::getNameClinic() . PHP_EOL;
    for ($i=1; $i<=$amountDoctors; $i++)
    {
        $doctor = new Doctor(fillMember(), 'D');
        Clinic::setArrayDoctors(
            $doctor->getPersonId(),
            $doctor->getName(),
            $doctor->getSurname(),
            $doctor->getSpecialization(),
            $doctor->getArrayDoctorPatient()
        );
        Clinic::setFullArrayDoctorsId($doctor->getPersonId(), $doctor->getSurname(), $doctor->getName(), $i);
        Clinic::setDoctorsId($doctor->getPersonId(), $i);
    }

    for ($a=1; $a <= $amountPatients; $a++)
    {
        $patient = new Patient(fillMember(), 'P');
        $patient->setDiseases();
        Clinic::setArrayPatients(
            $patient->getPersonId(),
            $patient->getName(),
            $patient->getSurname(),
            $patient->getDiseases()
        );
        $count = rand(0, $amountDoctors - 1);
        $id = Clinic::getArrayKeysDoctors();
        Clinic::addPatientToDoctor($id[$count], $patient->getSurname(), $patient->getPersonId());
        Clinic::setFullArrayPatientsId($patient->getPersonId(), $patient->getSurname(), $patient->getName(), $a);
        Clinic::setPatientsId($patient->getPersonId(), $a);
    }
}