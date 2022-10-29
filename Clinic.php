<?php

class Clinic
{
    private static array $arrayDoctors = [];
    private static array $arrayPatients = [];
    private string $nameClinic;

    public function __construct($nameClinic)
    {
        $this->nameClinic=$nameClinic;
    }

    public function setNameClinic(string $nameClinic): void
    {
        $this->nameClinic = $nameClinic;
    }

    public function getNameClinic(): string
    {
        return $this->nameClinic;
    }

    public static function setArrayDoctors(string $personId, string $name, string $surname, string $specialization): void
    {
        self::$arrayDoctors[$personId] = "Dr.$name $surname Specialization - $specialization";
    }

    public static function getArrayDoctors(): string
    {
        return implode(self::$arrayDoctors) . PHP_EOL;
    }

    public static function setArrayPatients(string $personId, string $name, string $surname): void
    {
        self::$arrayPatients[$personId] = "$name $surname";
    }

    public static function getArrayPatients(): string
    {
        return implode(self::$arrayPatients) . PHP_EOL;
    }

    public static function getDoctor(string $surname): string
    {
        return self::$arrayDoctors[$surname] . " $surname";
    }
}
