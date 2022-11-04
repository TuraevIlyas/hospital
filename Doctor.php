<?php


class Doctor extends Person
{
    private array $arrayDoctorPatient;
    protected string $specialization;

    public function __construct(
        array  $info,
        string $prefix
    )
    {
        parent::__construct($info, $prefix);
        $this->arrayDoctorPatient = [];
    }

    public function getArrayDoctorPatient(): array
    {
        return $this->arrayDoctorPatient;
    }

    public function setSpecialization(): void
    {
        $this->specialization = file('data/specialization.txt')[rand(0, 3)];
        $this->specialization = trim($this->specialization, PHP_EOL);
    }

    public function getSpecialization(): string
    {
        return $this->specialization;
    }
}