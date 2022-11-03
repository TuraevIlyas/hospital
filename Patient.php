<?php

class Patient extends Person
{
    public array $diseases = [];

    public function __construct($name, $surname, $gender, $age, $addressClinic, $personId, $diseases)
    {
        parent::__construct($name, $surname, $gender, $age, $addressClinic);
        $this->disseases = $diseases;
    }

    public function ageCheck()
    {
        if ($this->age >= 18) {
            echo "You are welcome, Mr " . $this->surname . ". We are happy to see you!!!";
        } else {
            echo "U 2 lil' lad, " . $this->name . ". Get off zoomer!!!";
        }
    }

    public function getFullInfo(): string
    {
        parent::getFullInfo();
        return $this->disease;
    }
}