<?php
include('index12.php');
echo "The number of trees are: ";

//we can use require as well instead of include to connect files together
//require('index12.php');
//both require and include do the same thing bit they handle errors differently
//include shows a warning and continue executing while 
//require does show warning but instead execution stops
//its advised to use require
//functions like to retrieve year we use date("Y");

$yearOfBirth = 2000;

$currentYear = (int)date("Y");

echo "John is ".($currentYear - $yearOfBirth)." years old.";

function compute($nameOfPerson, $yearOfBirth){
    $currentYear = (int)date("Y");
    $ageToday = $currentYear - $yearOfBirth;
    return $nameOfPerson." is ".$ageToday." years old";

}

echo compute("Joan", 1993);

?>