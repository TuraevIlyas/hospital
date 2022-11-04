<?php


class Clinic
{
    private array $arrayDoctors = [];
    private array $arrayPatients = [];
    private array $fullArrayDoctorsId = [];
    private array $fullArrayPatientsId = [];
    private array $patientsId = [];
    private array $doctorsId = [];
    private string $nameClinic;

    public function __construct($nameClinic)
    {
        $this->nameClinic=$nameClinic;
    }

    public function setDoctorsId(
        string $personId,
        int    $count
    ): void
    {
        $this->doctorsId[$count] = $personId;
    }

    public function getDoctorsId(string $count): string
    {
        return $this->doctorsId[$count];
    }

    public function setPatientsId(
        string $personId,
        int    $count
    ): void
    {
        $this->patientsId[$count] = $personId;
    }

    public function getPatientsId(string $count): string
    {
        return $this->patientsId[$count];
    }

    public function setFullArrayDoctorsId(
        string $personId,
        string $surname,
        string $name,
        int    $count
    ): void
    {
        $variable = str_replace(PHP_EOL, '', "($personId) Dr.$surname $name");
        $this->fullArrayDoctorsId[$count] = $variable;
    }

    public function getFullArrayDoctorsId(): array
    {
        return $this->fullArrayDoctorsId;
    }

    public function setFullArrayPatientsId(
        string $personId,
        string $surname,
        string $name,
        int    $count
    ): void
    {
        $variable = str_replace(PHP_EOL, '', "($personId) Patient $surname $name");
        $this->fullArrayPatientsId[$count] = $variable;
    }

    public function getFullArrayPatientsId(): array
    {
        return $this->fullArrayPatientsId;
    }

    public function getArrayKeysDoctors(): array
    {
        return array_keys($this->arrayDoctors);
    }

    public function setNameClinic(string $nameClinic): void
    {
        $this->nameClinic = $nameClinic;
    }

    public function getNameClinic(): string
    {
        return $this->nameClinic;
    }

    public function setArrayDoctors(
        string $personId,
        string $name,
        string $surname,
        string $specialization,
        int    $age,
        array  $arrayDoctorsPatient
    ): void
    {
        $array = implode(', ', $arrayDoctorsPatient);
        $info = "Dr. $name $surname, Age - $age, Specialization - $specialization Patients:" . $array;
        $variable = str_replace(PHP_EOL, '', $info);
        $this->arrayDoctors[$personId] = $info;
    }

    public function getArrayDoctors(): array
    {
        echo 'List of doctors: ' . PHP_EOL;
        return $this->arrayDoctors;
    }

    public function addPatientToDoctor(
        string $personId,
        string $member,
        string $patientId
    ): void
    {
        $array = $this->arrayDoctors[$personId];
        $this->arrayDoctors[$personId] = $array . $member . "($patientId)";
    }

    public function setArrayPatients(
        string $personId,
        string $name,
        string $surname,
        int    $age,
        array  $arrayDiseases
    ): void
    {
        $array = implode(', ', $arrayDiseases);
        $info = "$name $surname, Age - $age, Diseases: " . $array;
        $variable = str_replace(PHP_EOL, '', $info);
        $this->arrayPatients[$personId] = $variable;
    }

    public function getArrayPatients(): array
    {
        echo 'List of patients: ' . PHP_EOL;
        return $this->arrayPatients;
    }

    public function getDoctor(string $personId): string
    {
        return PHP_EOL . $this->arrayDoctors[$personId];
    }

    public function getPatient(string $personId): string
    {
        return PHP_EOL . $this->arrayPatients[$personId];
    }
}