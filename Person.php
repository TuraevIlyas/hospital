<?php

class Person
{
    protected string $name;
    protected string $surname;
    protected string $gender;
    protected int $age;

    public function setFullInfo($name, $surname, $gender, $age){
        $this->name=$name;
        $this->surname=$surname;
        $this->gender=$gender;
        $this->age=$age;
    }
    public function getFullInfo(){
        return "{$this->name}" . "{$this->surname}" . "{$this->gender}" . "{$this->age}";
    }
}