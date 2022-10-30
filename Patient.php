<?php


class Patient extends Person
{
    private array $diseases = [];

    public function __construct($info)
    {
        parent::__construct($info);
    }

    public function setDiseases(): void
    {
        $diseases = file('../data/diseases.txt');
        $countOfArray = count($diseases);
        for ($i=1; $i <=rand(1,3); $i++) {
            $this->diseases[] = $diseases[rand(0, $countOfArray - 1)];
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