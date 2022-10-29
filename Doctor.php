<?php

class Doctor extends Person
{
    protected array $arrayDoctorPatients = [];
    protected string $specialization;
    private array $memberId = [];

    public function __construct($name, $surname, $gender, $age, $specialization)
    {
        parent::__construct($name, $surname, $gender, $age);
        $this->specialization = $specialization;
    }

    protected function breatheCheck(): string
    {
        $rand = rand(0, 100);
        if ($rand > 50) {
            return "Дышите...";
        } else return "Не дышите...";
    }

    public function setSpecialization(string $specialization): void
    {
        $this->specialization=$specialization;
    }

    public function getSpecialization(): string
    {
        return $this->specialization;
    }
    public function setArray($patientId)
    {
        $this->arrayDoctorPatients[$patientId] = "$this->name $this->surname";
    }

    public function getArray($patientId, $name, $surname)
    {
        print_r($this->arrayDoctorPatients);
    }

    public function getElement($patientId, $name, $surname)
    {

    }

    public function compile($personId, $name, $surname)
    {
        $this->memberId[$personId] = "$name $surname";
    }

    public function getFullInfo(): string
    {
        return parent::getFullInfo() . PHP_EOL . "Specialization - $this->specialization" . PHP_EOL . PHP_EOL;
    }

    public function fillMembers($info){
        $info[1] = file('../data/firstname.txt');
        $firstName = file('../data/firstname.txt');
        $secondName = file('../data/secondname.txt');
        $illnesses = file('../data/diseases.txt');
        $specialization = file('../data/specialization.txt');
        $gender = ['M', 'F'];
        $info = ['name'=> $firstName[rand(0,count($firstName)-1)],
            'surname'=> $secondName[rand(0,count($secondName)-1)],
            'gender' => $gender[rand(0,0)],
            'age' => rand(18, 90),
            'specialization' => $specialization[rand(0,3)],
            'illnesses' => array_slice($illnesses, rand(0,count($illnesses)-1), count($illnesses)-1)
        ];
        return $info[$var];
    }
}