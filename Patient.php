<?php

class Patient extends Person
{
    private array $diseases = [];

    public function __construct($info)
    {
        parent::__construct($info);
    }

    public function ageCheck()
    {
        if ($this->age >= 18) {
            echo "You are welcome, Mr " . $this->surname . ". We are happy to see you!!!";
        } else {
            echo "U 2 lil' lad, " . $this->name . ". Get off zoomer!!!";
        }
    }
    public function setDiseases($disease): void
    {
        $newDiseases = [];
        $countOfArray = count($disease);
        for ($i=1; $i <=rand(1,3); $i++) {
            $newDiseases[] = $disease[rand(0, $countOfArray - 1)];
        }
        $this->diseases=array_unique($newDiseases);
    }

    public function getDiseases(): string
    {
        return implode(', ',$this->diseases);
    }
    public function getFullInfo(): string
    {

        return parent::getFullInfo() . $this->diseases;
    }
}