<?php


abstract class Person
{
    protected string $name;
    protected string $surname;
    protected string $personId;
    protected int $age;

    public function __construct(
        array $info,
        string $prefix
    )
    {
        $this->name = $info['name'];
        $this->surname = $info['surname'];
        $this->age = $info['age'];
        $this->personId = uniqid($prefix);
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


    public function getAge(): int
    {
        return $this->age;
    }

    public function getPersonId(): string
    {
        return $this->personId;
    }
}