<?php
$db_host = "localhost";
$db_user ="root";
$db_password = "";
$db_name = "studentclassmanagement";
$db_port = 3307;
// create connection object
$conn = new mysqli("$db_host","$db_user","$db_password","$db_name","$db_port");

// check connection
if($conn->connect_error){
    die("Connection Failed");
}


?>
