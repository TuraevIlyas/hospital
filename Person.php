<?php

class Person
{
    protected string $name;
    protected string $surname;
    protected string $gender;
    protected string $personId;
    protected string $addressClinic;
    protected int $age;

    public function __construct($name, $surname, $gender, $age, $addressClinic)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->gender = $gender;
        $this->age = $age;
        $this->addressClinic = $addressClinic;
        $this->personId = uniqid();
    }

    public function getFullInfo(): string
    {
        return "$this->name " . "$this->surname " . "$this->gender " . "$this->age " . "$this->addressClinic";
    }


    public function getPersonId(): string
    {
        return $this->personId;
    }
}