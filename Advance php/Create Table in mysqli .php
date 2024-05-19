<?php

$servername = "localhost:3307";
 $username = "root";
 $password = "";
    $dbname = "createdbtesting";
    $conn = mysqli_connect($servername, $username, $password,$dbname);
    if(!$conn){
        die("Could not connect to");
    }
    $sql = "create table emp (id int NOT NULL AUTO_INCREMENT PRIMARY KEY,name varchar(50),email varchar(50),password varchar(50))";
    if(mysqli_query($conn,$sql)){
        echo "Table created successfully";
    }
    else{
        echo "Table not created successfully";
    }
?>