<?php

class Clinic
{
    protected array $arrayDoctors = [];
    protected array $arrayPatients = [];

    public function setArrayDoctors($name, $surname)
    {
        $this->arrayDoctors[$surname] = $name;
    }

    public function setArrayPatients    ($name, $surname)
    {
        $this->arrayPatients[$surname] = $name;
    }

    public function getArrayDoctor($surname)
    {
        return $this->arrayDoctors[$surname];
    }

    public function getArrayPatient($surname)
    {
        return $this->arrayPatients[$surname];
    }

}
