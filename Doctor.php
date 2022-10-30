<?php


class Doctor extends Person
{
    protected string $specialization;

    public function __construct($info)
    {
        parent::__construct($info);
        $this->specialization = $info['specialization'];
    }

    public function setSpecialization(string $specialization): void
    {
        $this->specialization=$specialization;
    }

    public function getSpecialization(): string
    {
        return $this->specialization;
    }

    public function getFullInfo(): string
    {
        return parent::getFullInfo() . PHP_EOL . "Specialization - $this->specialization" . PHP_EOL . PHP_EOL;
    }
}