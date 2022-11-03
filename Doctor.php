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
        $this->specialization = $info['specialization'];
        $this->arrayDoctorPatient = [];
    }

    public function getArrayDoctorPatient(): array
    {
        return $this->arrayDoctorPatient;
    }

    public function setSpecialization(string $specialization): void
    {
        $this->specialization = $specialization;
    }

    public function getSpecialization(): string
    {
        return $this->specialization;
    }
}