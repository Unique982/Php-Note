<?php
 $servername = "localhost:3307";
 $username = "root";
 $password = "";
    $dbname = "";
    $conn = mysqli_connect($servername, $username, $password,$dbname);
    if(!$conn){
        die("Could not connect to");
    }
    $sql = "CREATE DATABASE createdbtesting";
    if(mysqli_query($conn,$sql)){
        echo "Database created successfully";
    }
    else{
        echo "Database not created successfully";
    }
?>