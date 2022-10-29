<?php

class Patient extends Person
{
    private array $diseases= [];

    public function __construct($name, $surname, $gender, $age)
    {
        parent::__construct($name, $surname, $gender, $age);
    }

    public function ageCheck()
    {
        if ($this->age >= 18) {
            echo "You are welcome, Mr " . $this->surname . ". We are happy to see you!!!";
        } else {
            echo "U 2 lil' lad, " . $this->name . ". Get off zoomer!!!";
        }
    }
    public function setDiseases($disease)
    {
        $this->diseases=$disease[]=$disease;
    }

    public function getFullInfo(): string
    {

        return parent::getFullInfo() . $this->diseases;
    }
}