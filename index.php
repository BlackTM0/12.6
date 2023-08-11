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

$allSurnames =''; 
$allNames =''; 
$allPatronymics =''; 
$allFullNames =''; 
$allFullNamesArr ='';
$surname =''; 
$name =''; 
$patronymic =''; 



function getFullnameFromParts($surname, $name, $patronymic) { 
        
    return "$surname  $name  $patronymic"; 
}; 


function getPartsFromFullName($allFullNames) { 
    global $allFullNamesArr; 
    return $allFullNamesArr; 
}

function getShortName($allFullNames) { 
    global $name; 
    global $surname; 
    $shortSurname = mb_substr($surname, 0,1);
    return $name .' ' .  $shortSurname;  
}


function getGenderFromName($allFullNamesArr) { 
    $gender = 0;
   
    if(substr($allFullNamesArr[1], -1) ==='а'){ 
        $gender -=1; 
    } else { 
        $gender +=1; 
    }; 
    if(substr($allFullNamesArr[0], -2) ==='ва'){ 
        $gender -=1; 
    } else { 
        $gender +=1; 
    }; 
    if(substr($allFullNamesArr[2], -3) ==='вна'){ 
        $gender -=1; 
    } else { 
        $gender +=1; 
    }; 
   
    

    if(substr($allFullNamesArr[1], -1) ==='й' or substr($allFullNamesArr[1], -1) ==='н' ){ 
        $gender +=1; 
    } else { 
        $gender -=1; 
    }; 
    if(substr($allFullNamesArr[0], -1) ==='в'){ 
        $gender +=1; 
    } else { 
        $gender -=1; 
    }; 
    if(substr($allFullNamesArr[2], -2) ==='ич'){ 
        $gender +=1; 
    } else { 
        $gender -=1; 
    }; 
return $gender;     
}



foreach($example_persons_array as $person) { 
    
    $person['fullname']  = explode(' ', $person['fullname']); 
    $surname = $person['fullname'][0]; 
    $name = $person['fullname'][1];
    $patronymic = $person['fullname'][2];  
       
    $allSurnames .=$surname . ' '; 
    $allNames .=$name . ' '; 
    $allPatronymics .=$patronymic . ' '; 
    $allFullNames ="$surname $name $patronymic"; 
    $allFullNamesArr = ['surname' =>$surname, 'name' =>$name, 'patronymic' =>$patronymic, 'gender' =>getGenderFromName($allFullNamesArr)];
    //$allFullNamesArr[3] =getGenderFromName($allFullNamesArr);
   
 
     

    print_r($allFullNamesArr); 
    //echo getShortName($allFullNames); 
    //echo getFullnameFromParts($surname, $name, $patronymic); 
    
     
     
 }; 











