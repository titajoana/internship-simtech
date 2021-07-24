<?php 
//this is my first code written in php. This is  a single line comment.
/*This is for  multi-line commenting. Where comments span multiple lines */
/*What we studied.
$age = 18; The operand determines the datatype of the variable.
echo "My age is ".$age." years."; This prints out the statement

if($verName == "Charles"){

    echo "You are right.";

}else{
    echo "You are not right";
}
foreach statements are used to loop through arrays. example

$myArray = [87, 343, 23, 323];

foreach ($myArray as $index => $value){
    echo "<br/> at index ".$index." = ".$value;
    
}
Arrays; Associative arrays - the index is a string
$myArray = [];
*/

//Assignment

$trees = ['wakiso' => [ 
        'muvule tree' => 569, 
        'eucalyptus' => 80003, 
        'Musizi' => 767363,
        'musabu' => 8984
    ], 
    'kabale' =>[
        'muvule tree' => 69,
        'eucalyptus' => 803,
        'musizi' => 7363,
        'masabu' => 89
    ], 
    'kabale' => [
        'muvule tree' => 90,
        'eucalyptus' => 703,
        'musizi' => 763,
        'masabu' => 29
    ]];

    echo $trees["wakiso"]["musabu"];
   
    
    

?>