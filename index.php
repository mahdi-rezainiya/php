<?php

    // $name = "mahdi";
    // echo $name;
    // define('NAME' , 'mahdi');
    // echo NAME;

    // NAME = 'ali';
    // echo NAME;

    // define('NAME' , 'ali');
    // echo NAME;
    // string
    $firstName = "mahdi";
    $lastName = "rezainiya";
    // echo $firstName.$lastName;
    // echo "Hi ".$firstName;
    
    // echo 'Hi $firstName';
    // echo "Hi $firstName $lastName";

    // echo strlen($firstName);
    // echo strtolower($firstName);
    // echo strtoupper($firstName);

    // echo str_replace('m' , 'n' , $firstName);

    // number

    // $age = 25 ;
    // $rate = 4.3;
    // echo $age;
    // echo $rate;

    // echo 2 + 4 * 3;
    // echo (2 + 4 )* 3;

    // $age = $age + 1 ;
    // echo $age ;

    // $age ++;
    // echo $age ;

    // $age = $age + 21 ;
    // echo $age ;

    // $age += 21 ;
    // echo $age ;

    // echo floor($rate);
    // echo ceil($rate);

    // boolean
    // $flag = true ;
    // $flag = false ;
    // echo intval($flag);

    // indexed arrays
    $peopleOne = ['mahdi' , 'ali' , 'hamed'];
    $peopleTwo = array('mahdi' , 'ali' , 'omid');

    // echo $peopleOne[0];

    $numbers = [1 , 2 , 3 , 4];
    // echo $numbers;
    // print_r($numbers)

    $stuff = ['mahdi' , 8 , true];
    // print_r($stuff)
    // $stuff[] = 'atefe';
    // or
    array_push($stuff , 'atefe');
    $stuff[1] = 1;

    // print_r($stuff)

    // merge

    $mixed = array_merge($stuff , $numbers);

    $name = array_pop($stuff) ;
    // echo $name;

    // print_r($mixed);

        // count
    // echo count($stuff);

    //associative arrays (key and value pairs)
    $teamOne = ['blue' => 'Esteghlal' , 'red' => 'teraktor' , 'yellow' => 'sepahan'];
    $teamTwo = array('orange' => 'foolad');

    // echo $teamOne['blue'];

    // multi-dimensional arrays
    $books = [
        ['book' => 'boof koor' , 'author' => 'sadegh hedayat'],
        ['book' => 'kelidar' , 'author' => 'mahmoud dowlatabadi'], 
        ['book' => 'souvashoun' , 'author' => 'simin daneshvar']
    ];
    // echo $books[1][1];
    echo $books[1]['author'];





?>


<!-- <!DOCTYPE html> -->
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Project</title>
</head>
<body> -->

<?php
    // echo "Hello World!";
?>

<!-- <br> -->

<!-- <button> -->
    <?php
        // echo "click me";
    ?>
<!-- </button> -->

<!-- </body>
</html> -->