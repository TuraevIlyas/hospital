<?php

namespace src\Main;

class Clinic
{
    protected array $arrayDoctors = [];
    protected array $arrayPatients = [];
    protected string $address;

    public function __construct($address)
    {
        $this->address = $address;
    }

    public function setArrayDoctors($name, $surname)
    {
        $this->arrayDoctors[$surname] = $name;
    }

    public function setArrayPatients($name, $surname)
    {
        $this->arrayPatients[$surname] = $name;
    }

    public function getArrayDoctor($surname)
    {
        return $this->arrayDoctors[$surname];
    }

}