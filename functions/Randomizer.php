<?php

function fillMember(): array{
    $firstName = file('data/firstname.txt');
    $secondName = file('data/secondname.txt');
    $specialization = file('data/specialization.txt');
    $gender = ['M', 'F'];
    $info = ['name'=> $firstName[rand(0,count($firstName)-1)],
        'surname'=> $secondName[rand(0,count($secondName)-1)],
        'gender' => $gender[rand(0,0)],
        'age' => rand(18, 90),
        'specialization' => $specialization[rand(0,3)]
    ];
    return $info;
}