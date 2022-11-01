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

    public static function getArrayKeysDoctors(): array
    {
        return array_keys(self::$arrayDoctors);
    }

    public function setNameClinic(string $nameClinic): void
    {
        $this->nameClinic = $nameClinic;
    }

    public function getNameClinic(): string
    {
        return $this->nameClinic;
    }

    public static function setArrayDoctors(
        string $personId,
        string $name,
        string $surname,
        string $specialization,
        array $arrayDoctorsPatient
    ): void
    {
        $arr = implode(', ', $arrayDoctorsPatient);
        $info = "Dr. $name $surname, Specialization - $specialization  Patients:" . $arr;
        $var = str_replace(PHP_EOL, '', $info);
        self::$arrayDoctors[$personId] = $var;
    }
    public static function getArrayDoctors(): array
    {
        echo 'array of doctors: ' . PHP_EOL;
        return self::$arrayDoctors;
    }

    public static function addPatientToDoctor(string $personId, string $member): void
    {
        $arr = self::$arrayDoctors[$personId];
        self::$arrayDoctors[$personId] = $arr . $member;
    }

    public static function setArrayPatients(string $personId, string $name, string $surname, array $arrayDiseases): void
    {
        $arr = implode(', ', $arrayDiseases);
        $info = "$name $surname Diseases:" . $arr;
        $var = str_replace(PHP_EOL, '', $info);
        self::$arrayPatients[$personId] = $var;
    }

    public static function getArrayPatients(): array
    {
        echo 'array of patients: ' . PHP_EOL;
        return self::$arrayPatients;
    }

    public static function getDoctor(string $personId): string
    {
        return self::$arrayDoctors[$personId];
    }

    public static function getPatient(string $personId): string
    {
        return self::$arrayPatients[$personId];
    }
}