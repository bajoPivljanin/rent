<?php 
session_start();
    $servername = "localhost";
    $dbpass = "";
    $dbusername = "root";
    $dbname = "rent";
    $conn = mysqli_connect($servername,$dbusername,$dbpass,$dbname);

    if(!$conn){
        die("Error");
    }

//nista ne diraj