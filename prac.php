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
        /*Cookies and sessions are used to store information temporarily on our browser.
        Acookie stores for a period of time while a session stores as long as browser is open
        functions like empty() to check if a variable is empty
        isset()
        the two methods used to transfer data across the application; get and post
        GET shows data on title bar while post doesnt show data on the title bar */


        //How to connect to your database using MySQLi
        /*$host = "localhost";
          $username = "root";
          $password = ""; 
          $database_name = "internship";
          
          $mysqli_connection = new mysqli("localhost", "root", "");

          this connects to the server.

          creating the database
          $mysqli_connection->query("create database if not exists internship");
          */
        //$mysqli_connection = new mysqli($host, $username, $password);

    ?>