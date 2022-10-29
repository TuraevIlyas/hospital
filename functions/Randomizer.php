<?php
function fillMembers($var){
    $firstName = file('data/firstname.txt');
    $secondName = file('data/secondname.txt');
//    $illnesses = file(); Here you need enter your file name with illnesses
//    $specialization = file(); Here you need enter your file name with specialization
    $gender = ['M', 'F'];
    $info = ['name'=> $firstName[rand(1,100)],
        'surname'=> $secondName[rand(1,42)],
        'gender' => $gender[rand(0,0)],
        'age' => rand(18, 90),
//        'specialization' => $specialization[rand(1,10)],
//        'illnesses' => $illnesses
    ];
    return $info[$var];
}