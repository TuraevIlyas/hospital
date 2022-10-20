<?php

class Doctor extends Person
{
    protected array $arrayDoctorPatients = [];
    protected string $specialization;

    protected function breatheCheck(): string
    {
        $rand = rand(0, 100);
        if ($rand > 50) {
            return "Дышите...";
        } else return "Не дышите...";
    }
}