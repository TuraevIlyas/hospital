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

    public static function setArrayDoctors(string $personId, string $name, string $surname, string $specialization, array $arrayDoctorsPatient): void
    {
        $arr = implode(', ',$arrayDoctorsPatient);
        self::$arrayDoctors[$personId] = "Dr. $name $surname Specialization - $specialization, $arr";
    }

    public static function getArrayDoctors(): array
    {
        return self::$arrayDoctors;
    }

    public static function setArrayPatients(string $personId, string $name, string $surname): void
    {
        self::$arrayPatients[$personId] = "$name $surname";
    }

    public static function getArrayPatients(): array
    {
        return self::$arrayPatients;
    }

    public function setArrayDoctorPatient(): void
    {

    }

    public static function getDoctor(string $personId): string
    {
        return self::$arrayDoctors[$personId];
    }
}
