<?php
// creating variables for connection
$dsn = "mysql:host=localhost:3307;dbname=createdbtesting";
$db_user="root";
$db_password="";
// creating connection with exception handling
try{
    $conn =new PDO($dsn,$db_user,$db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connection successfully ";

}
catch(PDOException $e){
    echo "Connection failed".$e->getMessage();
}
//  using named placeholders
$sql = "UPDATE emp SET name=:name,email=:email, password= :password WHERE id=:id";
//prepred Statement
$result = $conn->prepare($sql);
//bind parameter to prepared statement
$result->bindParam(':name',$name, PDO::PARAM_STR);
$result->bindParam(':email',$email, PDO::PARAM_STR);
$result->bindParam(':password',$password, PDO::PARAM_STR);
$result->bindParam(':id',$id, PDO::PARAM_INT);

// variable value 
$name = "computer";
$email = "computer@gmai.com";
$address = "Nepal";
$id = 5;

// execute
$result->execute();
echo $result->rowCount()."update successfully";
unset($result);

$conn = null;
?>