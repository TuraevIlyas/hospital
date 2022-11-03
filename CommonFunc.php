<?php

class CommonFunc
{
    public static function fillMember(): array
    {
        return ['name' => file('data/firstNames.txt')[rand(0, count(file('data/firstNames.txt')) - 1)],
            'surname' => file('data/secondNames.txt')[rand(0, count(file('data/secondNames.txt')) - 1)],
            'age' => rand(18, 90),
            'specialization' => file('data/specialization.txt')[rand(0, 3)]
        ];
    }

    public static function filterInput()
    {
        $input = readline();

        while (!is_numeric($input)) {

            if ($input == 'exit') { // Program exit initialization
                echo 'You have left the program. Goodbye';
                exit;
            }
            echo 'Error: the numeric input needed.' . PHP_EOL . "Try again: ";
            $input = readline();
        }
        return $input;
    }

    public static function fillInfo(
        string $nameClinic,
        int $amountDoctors,
        int $amountPatients
    ): object
    {
        $clinic = new Clinic($nameClinic);
        echo 'Welcome to the ' . $clinic -> getNameClinic() . PHP_EOL;
        for ($i = 1; $i <= $amountDoctors; $i++) {
            $doctor = new Doctor(
                info: CommonFunc::fillMember(),
                prefix: 'D'
            );
            $clinic->setArrayDoctors(
                personId: $doctor->getPersonId(),
                name: $doctor->getName(),
                surname: $doctor->getSurname(),
                specialization: $doctor->getSpecialization(),
                age: $doctor->getAge(),
                arrayDoctorsPatient: $doctor->getArrayDoctorPatient()
            );
            $clinic->setFullArrayDoctorsId(
                personId: $doctor->getPersonId(),
                surname: $doctor->getSurname(),
                name: $doctor->getName(),
                count: $i
            );
            $clinic->setDoctorsId(
                personId: $doctor->getPersonId(),
                count: $i
            );
        }

        for ($a = 1; $a <= $amountPatients; $a++) {
            $patient = new Patient(
                info: CommonFunc::fillMember(),
                prefix: 'P'
            );
            $patient->setDiseases();
            $clinic->setArrayPatients(
                personId: $patient->getPersonId(),
                name: $patient->getName(),
                surname: $patient->getSurname(),
                age: $patient->getAge(),
                arrayDiseases: $patient->getDiseases()
            );
            $count = rand(0, $amountDoctors - 1);
            $id = $clinic->getArrayKeysDoctors();
            $clinic->addPatientToDoctor(
                personId: $id[$count],
                member: $patient->getSurname(),
                patientId: $patient->getPersonId());
            $clinic->setFullArrayPatientsId(
                personId: $patient->getPersonId(),
                surname: $patient->getSurname(),
                name: $patient->getName(),
                count: $a
            );
            $clinic->setPatientsId(
                personId: $patient->getPersonId(),
                count: $a
            );
        }
        return $clinic;
    }
}