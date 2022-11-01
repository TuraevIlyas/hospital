<?php


class Doctor extends Person
{
    private array $arrayDoctorPatient;
    protected string $specialization;

    public function __construct(array $info, string $prefix)
    {
        parent::__construct($info, $prefix);
        $this->specialization = $info['specialization'];
        $this->arrayDoctorPatient = [];
    }

    public function setArrayDoctorPatient(string $personId = NULL, array $arrayDoctorPatient = NULL): void
    {
        $this->arrayDoctorPatient[$personId] = $arrayDoctorPatient;
    }

    public function getArrayDoctorPatient(): array
    {
        return $this->arrayDoctorPatient;
    }
    public function setSpecialization(string $specialization): void
    {
        $this->specialization=$specialization;
    }

    public function getSpecialization(): string
    {
        return $this->specialization;
    }

    public function getFullInfo(): string
    {
        return parent::getFullInfo() . PHP_EOL . "Specialization - $this->specialization" . PHP_EOL . PHP_EOL;
    }
}