<?php
    // $name = "mahdi";
    // define('NAME' , 'maryam');
    // $age = 28 ;
    // $job = "accounter";
    // NAME = "mahsa";
    // $f_name = "Mahdi ";
    // $l_name = "Rezainiya";
    // echo "Hi $f_name $l_name";
    // echo strlen($f_name.$l_name);
    // echo strtolower($f_name);
    // echo strtoupper($l_name);
    // echo str_replace('M' , 'n' , $f_name);

    // number
    // $age = 22 ; //integer
    // $rate = 4.5 ; //float
    // $age = $age + 1;
    // $age ++;
    // $age += $rate ;
    // echo floor($rate);
    // echo ceil($rate);
    // echo round($rate) ;
    
    // boolean
    // $male = true ;
    // $female = false ;
    // echo $male;
    // echo $female;
    // echo intval($female);

    // array
    // indexed array
    $peopleOne = ["mahdi" , "ali" , "hamed" , "hasan" , "saeed" , "hossein"];
    $peopleTwo = array("maryam" , "mahsa" , "zahra" , "fatemeh" , "nika" , "kosar");
    // $numberOne = [4 , 7.8 , 9.1 , 14.2 , 75.3];
    // $numberTwo = array(7.1 , 8.54 , 6 , 42.3);
    $people = array_merge($peopleOne , $peopleTwo);
    // print_r($numberTwo);
    // echo $peopleOne[0];
    // $stuff1 = ["mahdi"  , 8 , true];
    // $stuff2 = ["ali" , 10 , false];
    // $stuff1[] = 'single';
    // array_push($stuff1 , "student");
    // $stuff1[1] = 5;
    // $stuff2[1] = 6 ;
    // $stuff2[0] = "ali ansari";
    // $stuff2[] = 'married';
    // array_push($stuff2 , 'student');
    // $stuff1[0] = "mahdi rezainiya";
    
    // merge
    // $mixed = array_merge($peopleOne , $peopleTwo);
    // array_pop($mixed);
    // array_pop($mixed);
    // print_r($mixed);
    // echo count($mixed);

    //associative arrays (key and value pairs)
    // $fruitOne = ['red' => 'apples' , 'blue' => 'blueberries' , 'orange' => 'orange' , 'yellow' => 'banana' , 'black' => 'black cherries' , 'pink' => 'pomegranate'];

    // echo $fruitOne;
    // echo $fruitOne[1];
    // print_r($fruitOne);

    // multi-dimensional arrays
    // $person = [
    //     [
    //         'id' => 21478555 , 'first-name' => 'ali' , 'last-name' => 'ansari' , 'age' => 20
    //     ],
    //     [
    //         'single' => true , 'student' => true ,
    //         'happy' => true , 'continue' => true
    //     ],
    //     [
    //         'country' => 'iran' , 'city' => 'tabriz' , 'nationality' => 'ariaism'
    //     ]
    // ];

    // print_r($person);

    // echo true;
    // echo false;
    // echo intval(false);
    // echo "" ;


    // comparison operator (>     <    >=    <=     ==)
    // echo 2 > 6 ;
    // echo 2 < 6;
    // echo 2 <= 2 ;
    // echo 2 == 9;
    // echo 2 == "2" ;

    // logic operator (!    and(&&)    or(||))

    // echo  2 != 6 ;
    // echo  2 != 2 ;

    // echo intval((true) && (true));
    // echo '<br>';
    // echo intval((true) && (false));
    // echo '<br>';
    // echo  intval((false) && (true));
    // echo '<br>';
    // echo  intval((false) && (false));
    // echo '<br>';
    // echo intval((true) || (true));
    // echo '<br>';
    // echo intval((true) || (false));
    // echo '<br>';
    // echo  intval((false) || (true));
    // echo '<br>';
    // echo  intval((false) || (false));

    // strict-equal operator (===)

    // echo intval(5 == "5");
    // echo intval(5 != '5'); 
    // echo intval(5 === "5"); 
    // echo intval(5 !== "5"); 

    // conditional statements
    // $number = 2 ;
    // if($number > 5 ) {
    //     echo 'yes it is bigger than 5';
    // } 
    // elseif($number > 3) {
    //     echo 'yes it is bigger than 3';
    // }
    // else { 
    //     echo 'yes it is bigger than zero';
    // }

    // loop
    //for

    // for($i = 0 ; $i < 5 ; $i++){
    //     echo "hello";
    //     echo '<br>';
    // }

    // for($i = 0 ; $i < count($people) ; $i++){
    //     echo $people[$i];
    //     echo '<br>';
    // }

    // $i = 0 ;
    // while($i < count($people)){
    //     echo $people[$i] . '<br>';
    //     $i++;
    // }

    $movies = [
        ['name' => 'Spider-Man: No Way Home', 'year' => 2021, 'rate' => 8.9],
        ['name' => 'The Matrix Resurrections', 'year' => 2021, 'rate' => 5.8],
        ['name' => 'Encanto', 'year' => 2021, 'rate' => 7.3],
        ['name' => 'The Nun', 'year' => 2018, 'rate' => 5.3],
        ['name' => '6 Underground', 'year' => 2019, 'rate' => 6.1],
        ['name' => 'Baywatch', 'year' => 2017, 'rate' => 5.5],
        ['name' => '47 Meters Down', 'year' => 2017, 'rate' => 5.7]
    ];

    // foreach($movies as $movie){
    //     echo $movie['name'] . '<br>';
    // }

    // echo $movies[0]['name'];
    // print_r($movies[0]['year']);


    // function
    
    // function interduce($f_name , $l_name){
    //     echo "hi my name is $f_name $l_name and I am glad to see you" . '<br>';
    // };
    
    // interduce("mahdi" , "rezainiya");
    // interduce("ali" , "ansari");

    // function calc($a , $b , $c , $d){
    //     $calc = $a * $b + $c / $d;
    //     return $calc ;
    // };

    // $result = calc(7 , 8 , 4 , 2);
    // echo $result;

    // LOCAL & GLOBAL

    // function myFunc(){
    //     $num = 5 ;
    //     echo "this is $num";
    // };
    // echo myFunc();
    // echo $num;

    // function nameExport($nam){
    //     echo "hello $nam";
    // }

    // nameExport("mahdi");
    // echo $nam;

    // $nam = "ali";
    // function nameExport(){
    //     global $nam;
    //     $nam = "mahdi";
    //     echo "hello $nam " . '<br>';
    // };
    // nameExport();
    // echo $nam;

    // include & require
    // include 'name.php';
    // echo 'End';
    // require 'name.php';
    // echo 'End';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>php project</title>
</head>
<body>
    <!-- <h1>Movies</h1>
    <?php foreach($movies as $movie){  ?>
            <h3><?php echo $movie['name'] . - $movie['year'] ?></h3> 
            <p>rate : <?php echo $movie['rate'] ?></p>
    <?php } ?> -->

    <?php 
        include 'Content.php';
    ?>
</body>
</html>