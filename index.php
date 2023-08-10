<?php

$example_persons_array = [
    [
        'fullname' => 'Иванов Иван Иванович',
        'job' => 'tester',
    ],
    [
        'fullname' => 'Степанова Наталья Степановна',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Пащенко Владимир Александрович',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Громов Александр Иванович',
        'job' => 'fullstack-developer',
    ],
    [
        'fullname' => 'Славин Семён Сергеевич',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Цой Владимир Антонович',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Быстрая Юлия Сергеевна',
        'job' => 'PR-manager',
    ],
    [
        'fullname' => 'Шматко Антонина Сергеевна',
        'job' => 'HR-manager',
    ],
    [
        'fullname' => 'аль-Хорезми Мухаммад ибн-Муса',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Бардо Жаклин Фёдоровна',
        'job' => 'android-developer',
    ],
    [
        'fullname' => 'Шварцнегер Арнольд Густавович',
        'job' => 'babysitter',
    ],
];
function getFullnameFromParts($example_persons_array){ 
foreach($example_persons_array as $person) { 
   $person['fullname']  = explode(' ', $person['fullname']); 
   $surname = $person['fullname'][0]; 
   $name = $person['fullname'][1];
   $patronymic = $person['fullname'][2];  
   $fullnames .= " $surname  $name  $patronymic ";
}
return $fullnames; 

}; 
//echo getFullnameFromParts($example_persons_array);



 function getPartsFromFullname($example_persons_array) { 
    $parts_array = []; 
    foreach($example_persons_array as $person) { 
        $fullnameparts = explode(' ', $person['fullname']); 
        $surname = $fullnameparts[0]; 
        $name = $fullnameparts[1];
        $patronymic = $fullnameparts[2];
        $parts_array[] = [ 
            'surname' => $surname,
            'name' => $name,
            'patronymic' => $patronymic, 
        ]; 
    }
    return $parts_array; 
 } 
//print_r (getPartsFromFullname($example_persons_array)); 

function getShortNames($example_persons_array){ 
    foreach($example_persons_array as $person) { 
       $person['fullname']  = explode(' ', $person['fullname']); 
       $surname = mb_substr($person['fullname'][0],0,1); 
       $name = $person['fullname'][1];
       $patronymic = $person['fullname'][2];  
       $shortNames .= "$name  $surname   ";
    }
    return $shortNames; 
    }; 
     
 // echo  getShortNames( $example_persons_array);
 