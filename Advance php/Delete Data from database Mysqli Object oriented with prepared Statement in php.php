<?php
//  connection code

$db_host = "localhost"; 
$db_user = "root";
$db_password = "";
$db_name = "createdbtesting";
$db_port = 3307;
// craete connection
$conn = mysqli_connect($db_host,$db_user,$db_password,$db_name,$db_port);
// check connection
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
if(isset($_REQUEST['delete'])){
// Sql Query
$sql= "DELETE FROM emp where id =?";
// prepare statement
$result->$conn->prepare($sql);

if($result){
    // bind variables to prepared statement 
    $result->bind_param('i',$id);
     $id = $_REQUEST['id'];
    //execute statement
    $result->execute();
    //number of row affected 
    echo $result->affected_rows."Row Deleted";

}
// close prepared statement
$result->close();
}
?>