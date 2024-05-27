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
if(isset($_REQUEST['delete'])){
    // using named placeholders
    $sql = "DELETE FROM emp WHERE id= :id";

    //prepared statement
    $result->$conn->prepare($sql);

    //bind parameters to prepared statement
    $result->bindParam(':id',$id, PDO::PARAM_INT);
    //variable and values
    $id=5;
    // execute Prepared statement
    $result->execute();
    echo $result->rowCount()."Delete Successfully";
unset($result);
}
?>