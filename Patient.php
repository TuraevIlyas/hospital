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
    public function setDiseases(): void
    {
        $illnesses = file('../data/diseases.txt');
        $this->diseases = [];
        $countOfArray = count($illnesses);
        for ($i=1; $i <=rand(1,3); $i++) {
            $this->diseases[] = $illnesses[rand(0, $countOfArray - 1)];
        }
        $this->diseases=array_unique($this->diseases);
    }

    public function getDiseases(): array
    {
        return $this->diseases;
    }

    public function getFullInfo(): string
    {

        return parent::getFullInfo() . $this->diseases;
    }
}