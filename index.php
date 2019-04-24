<?php

/*
echo "Hello World. This is Version 2";
echo "<p>Password is " . getenv('DB_PASSWORD');
*/

class DBike {

    public $number;

    public $name;
}

$listOfBikes = [];

//$bikecount = 10;
$my_env_var = getenv('loopno');

for($i=0; $i < $my_env_var; $i++){

    $bike = new DBike;
    $bike -> number=$i;
    $bike -> name="Name $i";

    $listOfBikes[]=$bike;
}

//print_r($listOfBikes);

/*set the header type for output*/

header('Content-Type: application/json');

/*Create a variable to hold your JSON data */

$jsonOutput = json_encode($listOfBikes);

/*Output the JSON data*/

echo $jsonOutput;

