<?php

function fillInfo(string $nameClinic, int $amountDoctors, int $amountPatients): void
{
    Clinic::setNameClinic($nameClinic);
    echo 'Welcome to the ' . Clinic::getNameClinic() . PHP_EOL;
    for ($i = 1; $i <= $amountDoctors; $i++) {
        $doctor = new Doctor(
            info: fillMember(),
            prefix: 'D'
        );
        Clinic::setArrayDoctors(
            personId: $doctor->getPersonId(),
            name: $doctor->getName(),
            surname: $doctor->getSurname(),
            specialization: $doctor->getSpecialization(),
            age: $doctor->getAge(),
            arrayDoctorsPatient: $doctor->getArrayDoctorPatient()
        );
        Clinic::setFullArrayDoctorsId(
            personId: $doctor->getPersonId(),
            surname: $doctor->getSurname(),
            name: $doctor->getName(),
            count: $i
        );
        Clinic::setDoctorsId(
            personId: $doctor->getPersonId(),
            count: $i
        );
    }

    for ($a = 1; $a <= $amountPatients; $a++) {
        $patient = new Patient(
            info: fillMember(),
            prefix: 'P'
        );
        $patient->setDiseases();
        Clinic::setArrayPatients(
            personId: $patient->getPersonId(),
            name: $patient->getName(),
            surname: $patient->getSurname(),
            age: $patient->getAge(),
            arrayDiseases: $patient->getDiseases()
        );
        $count = rand(0, $amountDoctors - 1);
        $id = Clinic::getArrayKeysDoctors();
        Clinic::addPatientToDoctor(
            personId: $id[$count],
            member: $patient->getSurname(),
            patientId: $patient->getPersonId());
        Clinic::setFullArrayPatientsId(
            personId: $patient->getPersonId(),
            surname: $patient->getSurname(),
            name: $patient->getName(),
            count: $a
        );
        Clinic::setPatientsId(
            personId: $patient->getPersonId(),
            count: $a
        );
    }
}