<?php
/*foreach($trees as $index => $value){

        echo $index."<br>";

        foreach ($value as $key => $marks){
            echo            
        }

    } */

    /*foreach($trees as $key => $value){

        //the index is stored in $key and the value of the array is stored in $value

    } */

    $numericArray = [2, 4, 5];

    $associativeArray = [

        'Herman' => 23,
        'Joan' => 12
    ];
    echo $associativeArray['Joan'];

    $multidimentional = array(
        'John' => array(
            'Physics' => 98,
            'math' => 99
        ),
        'mary' => array(
            'Physics' => 89,
            'math' => 79
        )
        );
        echo $multidimentional["John"]["math"];

        foreach($multidimentional as $index => $value){
            echo $value['math']."<br>";

            echo $index."<br>";
            foreach($value as $key => $mark){
                echo $key." = ".$mark."<br>";
            }
        }
        //require
        //include
    ?>