<?php

class Person
{
    protected string $name;
    protected string $surname;
    protected string $gender;
    protected string $person_id;
    protected string $clinicAddress;
    protected int $age;

    public function __construct($name, $surname, $gender, $age, $clinicAddress)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->gender = $gender;
        $this->age = $age;
        $this->clinicAddress= $clinicAddress;
        $this->person_id = uniqid();
    }

    public function getFullInfo(): string
    {
        return "{$this->name} " . "{$this->surname} " . "{$this->gender} " . "{$this->age} " . "{$this->person_id} " . "{$this->clinicAddress}";
    }
}