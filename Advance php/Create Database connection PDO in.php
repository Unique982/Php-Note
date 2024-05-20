<?php
// create conncetion
$conn = new PDO("mysql:host=localhost:3307;dbname=createdbtesting;","root","");
if($conn){
    echo "Connection established";
}

?>