<?php


spl_autoload_register(function ($className){
    include $className . '.php';
});

function fillInfo($amountDoctors, $amountPatients, $nameClinic) {
    $clinic = new Clinic($nameClinic);
    for ($i=1; $i<=$amountDoctors; $i++){
         $doctor = new Doctor(fillMembers('name'), fillMembers('surname'), fillMembers('gender'),
            fillMembers('age'), 'terapevt');
    }
}