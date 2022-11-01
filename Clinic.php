<?php


class Clinic
{
    private static array $arrayDoctors = [];
    private static array $arrayPatients = [];
    private static array $fullArrayDoctorsId = [];
    private static array $fullArrayPatientsId = [];
    private static array $patientsId = [];
    private static array $doctorsId = [];
    private static string $nameClinic;

    public static function setDoctorsId(string $personId, int $count): void
    {
        self::$doctorsId[$count] = $personId;
    }

    public static function setPatientsId(string $personId, int $count): void
    {
        self::$patientsId[$count] = $personId;
    }

    public static function getPatientsId(string $count): string
    {
        return self::$patientsId[$count];
    }

    public static function getDoctorsId(string $count): string
    {
        return self::$doctorsId[$count];
    }

    public static function setFullArrayDoctorsId(string $personId, string $surname, string $name, int $count): void
    {
        $var = str_replace(PHP_EOL, '' ,"($personId) Dr.$surname $name");
        self::$fullArrayDoctorsId[$count] = $var;
    }

    public static function getFullArrayDoctorsId(): array
    {
        return self::$fullArrayDoctorsId;
    }

    public static function setFullArrayPatientsId(string $personId, string $surname, string $name, int $count): void
    {
        $var = str_replace(PHP_EOL, '' ,"($personId) Patient $surname $name");
        self::$fullArrayPatientsId[$count] = $var;
    }

    public static function getFullArrayPatientsId(): array
    {
        return self::$fullArrayPatientsId;
    }

    public static function getArrayKeysDoctors(): array
    {
        return array_keys(self::$arrayDoctors);
    }

    public static function setNameClinic(string $nameClinic): void
    {
        self::$nameClinic = $nameClinic;
    }

    public static function getNameClinic(): string
    {
        return self::$nameClinic;
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
        $info = "Dr. $name $surname, Specialization - $specialization  Patients:" . PHP_EOL . $arr;
        $var = str_replace(PHP_EOL, '', $info);
        self::$arrayDoctors[$personId] = $var;
    }

    public static function getArrayDoctors(): array
    {
        echo 'array of doctors: ' . PHP_EOL;
        return self::$arrayDoctors;
    }

    public static function addPatientToDoctor(string $personId, string $member, string $patientId): void
    {
        $arr = self::$arrayDoctors[$personId];
        self::$arrayDoctors[$personId] = $arr . $member . "($patientId)";
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
        return self::$arrayDoctors[$personId] . PHP_EOL;
    }

    public static function getPatient(string $personId): string
    {
        return self::$arrayPatients[$personId] . PHP_EOL;
    }
}