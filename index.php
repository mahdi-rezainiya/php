<?php
    // $name = "mahdi";
    define('NAME' , 'maryam');
    $age = 28 ;
    $job = "accounter";
    // NAME = "mahsa";
    $f_name = "Mahdi ";
    $l_name = "Rezainiya";
    // echo "Hi $f_name $l_name";
    // echo strlen($f_name.$l_name);
    // echo strtolower($f_name);
    // echo strtoupper($l_name);
    // echo str_replace('M' , 'n' , $f_name);

    // number
    $age = 22 ; //integer
    $rate = 4.5 ; //float
    // $age = $age + 1;
    // $age ++;
    // $age += $rate ;
    // echo floor($rate);
    // echo ceil($rate);
    // echo round($rate) ;
    
    // boolean
    $male = true ;
    $female = false ;
    // echo $male;
    // echo $female;
    // echo intval($female);

    // array
    // indexed array
    $peopleOne = ["mahdi" , "ali" , "hamed" , "hasan" , "saeed" , "hossein"];
    $peopleTwo = array("maryam" , "mahsa" , "zahra" , "fatemeh" , "nika" , "kosar");
    $numberOne = [4 , 7.8 , 9.1 , 14.2 , 75.3];
    $numberTwo = array(7.1 , 8.54 , 6 , 42.3);
    // print_r($numberTwo);
    // echo $peopleOne[0];
    $stuff1 = ["mahdi"  , 8 , true];
    $stuff2 = ["ali" , 10 , false];
    $stuff1[] = 'single';
    array_push($stuff1 , "student");
    $stuff1[1] = 5;
    $stuff2[1] = 6 ;
    $stuff2[0] = "ali ansari";
    $stuff2[] = 'married';
    array_push($stuff2 , 'student');
    $stuff1[0] = "mahdi rezainiya";
    
    // merge
    $mixed = array_merge($peopleOne , $peopleTwo);
    // array_pop($mixed);
    // array_pop($mixed);
    // print_r($mixed);
    // echo count($mixed);

    //associative arrays (key and value pairs)
    $fruitOne = ['red' => 'apples' , 'blue' => 'blueberries' , 'orange' => 'orange' , 'yellow' => 'banana' , 'black' => 'black cherries' , 'pink' => 'pomegranate'];

    // echo $fruitOne;
    // echo $fruitOne[1];
    // print_r($fruitOne);

    // multi-dimensional arrays
    $person = [
        [
            'id' => 21478555 , 'first-name' => 'ali' , 'last-name' => 'ansari' , 'age' => 20
        ],
        [
            'single' => true , 'student' => true ,
            'happy' => true , 'continue' => true
        ],
        [
            'country' => 'iran' , 'city' => 'tabriz' , 'nationality' => 'ariaism'
        ]
    ];

    // print_r($person);
?>