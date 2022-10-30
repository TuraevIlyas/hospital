<?php

abstract class Person
{
    protected string $name;
    protected string $surname;
    protected string $gender;
    protected string $personId;
    protected int $age;

    public function __construct($info)
    {
        $this->name = $info['name'];
        $this->surname = $info['surname'];
        $this->gender = $info['gender'];
        $this->age = $info['age'];
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
        return "Name - $this->name" . "Surname - $this->surname" . "Gender - $this->gender" . PHP_EOL ."Age - $this->age" . PHP_EOL .
            "Personal id - $this->personId";
    }
//
//    public function fillMembers(string $var): mixed
//    {
//        $firstName = file('data/firstname.txt');
//        $secondName = file('data/secondname.txt');
//        $illnesses = file('data/diseases.txt');
//        $specialization = file('data/specialization.txt');
//        $info = ['name'=> $firstName[rand(0,count($firstName)-1)],
//            'surname'=> $secondName[rand(0,count($secondName)-1)],
//            'gender' => $this->gender[rand(0,0)],
//            'age' => rand(18, 90),
//            'specialization' => $specialization[rand(0,3)],
//            'illnesses' => array_slice($illnesses, rand(0,count($illnesses)-1), count($illnesses)-1)
//        ];
//        return $info[$var];
//    }
}