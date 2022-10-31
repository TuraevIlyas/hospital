<?php


//$dir = "..\..\oop";
//$catalog = opendir($dir);
//while ($filename = readdir($catalog))
//{
//    if(strpos($filename, '.php')){
//        $filename = $dir."/".$filename;
//        require($filename);
//    }
//}
//closedir($catalog);
require 'Randomizer.php';
require  '..\Clinic.php';
require '..\Person.php';
require '..\Doctor.php';
require '..\Patient.php';


function fillInfo(int $amountDoctors, int $amountPatients): void {

    for ($i=1; $i<=$amountDoctors; $i++)
    {
        $doctor = new Doctor(fillMembers());
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
        $patient = new Patient(fillMembers());
        $patient->setDiseases();
        Clinic::setArrayPatients(
            $patient->getPersonId(),
            $patient->getName(),
            $patient->getSurname()
        );
        $count = rand(0, $amountDoctors - 1);
        $id = Clinic::getArrayKeysDoctors();
        Clinic::addPatientToDoctor($id[$count], $patient->getSurname());
//        $chainedPatient = array_rand(Clinic::getArrayPatients());
//
//        if (!isset($arrayPatients[$chainedPatient])) {
//            // TODO: link keys (patientId) amd values (doctorId) (to create a relations)
//        } else $a--;
    }
}
fillInfo(3,13);
print_r(Clinic::getArrayDoctors());