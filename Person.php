<?php

abstract class Person
{
    protected string $name;
    protected string $surname;
    protected string $gender;
    protected string $personId;
    protected int $age;

    public function __construct($name, $surname, $gender, $age)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->gender = $gender;
        $this->age = $age;
        $this->personId = uniqid();
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    public function setGender(string $gender): void
    {
        $this->gender = $gender;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getPersonId(): string
    {
        return $this->personId;
    }

    public function getFullInfo(): string
    {
        return "$this->name " . "$this->surname " . "$this->gender " . "$this->age " . "$this->personId";
    }
}