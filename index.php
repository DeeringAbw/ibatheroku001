<?php

/*
echo "Hello World. This is Version 2";
echo "<p>Password is " . getenv('DB_PASSWORD');
*/

public DBikes {

    public $number;

    public $name;
}

$listOfBikes = [];

for($i=0; $i < 10; i++){

    $bike = new DBike;
    $bike -> number="$i";
    $bike -> name="Name $i";

    $listOfBikes[]=$bike;
}

print_r($listOfBikes);

