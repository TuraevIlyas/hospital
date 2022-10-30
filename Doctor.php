<?php

class Doctor extends Person
{
    protected array $arrayDoctorPatients = [];
    protected string $specialization;
    private array $memberId = [];

    public function __construct($info)
    {
        parent::__construct($info);
        $this->specialization = $info['specialization'];
    }

    protected function breatheCheck(): string
    {
        $rand = rand(0, 100);
        if ($rand > 50) {
            return "Дышите...";
        } else return "Не дышите...";
    }

    public function setSpecialization(string $specialization): void
    {
        $this->specialization=$specialization;
    }

    public function getSpecialization(): string
    {
        return $this->specialization;
    }
    public function setArray($patientId)
    {
        $this->arrayDoctorPatients[$patientId] = "$this->name $this->surname";
    }

    public function getArray($patientId, $name, $surname)
    {
        print_r($this->arrayDoctorPatients);
    }

    public function getElement($patientId, $name, $surname)
    {

    }

    public function compile($personId, $name, $surname)
    {
        $this->memberId[$personId] = "$name $surname";
    }
    public function getFullInfo(): string
    {
        return parent::getFullInfo() . PHP_EOL . "Specialization - $this->specialization" . PHP_EOL . PHP_EOL;
    }
}