<?php


class Patient extends Person
{
    private array $diseases = [];

    public function __construct(
        array  $info,
        string $prefix
    )
    {
        parent::__construct($info, $prefix);
    }

    public function setDiseases(): void
    {
        $diseases = file(filename: 'data/diseases.txt');
        $countOfArray = count($diseases);
        for ($i = 1; $i <= rand(1, 3); $i++) {
            $this->diseases[] = $diseases[rand(0, $countOfArray - 1)];
        }
        $this->diseases = array_unique($this->diseases);
    }

    public function getDiseases(): array
    {
        return $this->diseases;
    }
}