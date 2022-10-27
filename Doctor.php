<?php

class Doctor extends Person
{
    protected array $arrayDoctorPatients = [];
    protected string $specialization;
    private array $member_id = [];

    public function __construct($name, $surname, $gender, $age, $addressClinic, $specialization)
    {
        parent::__construct($name, $surname, $gender, $age, $addressClinic);
        $this->specialization = $specialization;
    }

    protected function breatheCheck(): string
    {
        $rand = rand(0, 100);
        if ($rand > 50) {
            return "Breathe...";
        } else return "Не breathe...";
    }

    public function setArray($patient_id)
    {
        $this->arrayDoctorPatients[$patient_id] = "$this->name $this->surname";
    }

    public function getArray($patient_id, $name, $surname)
    {
        print_r($this->arrayDoctorPatients);
    }

    public function getElement($patient_id, $name, $surname)
    {

    }

    public function compile($person_id, $name, $surname)
    {
        $this->member_id[$person_id] = "$name $surname";
    }
}