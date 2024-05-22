<?php
$db_host = "localhost"; 
$db_user = "root";
$db_password = "password";
$db_name = "createdbtesting";
$db_port = 3307;
// craete connection
$conn = mysqli_connect($db_host,$db_user,$db_password,$db_name,$db_port);
// check connection
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
// select all data
$sql = "SELECT * FROM emp";

// bind paramter
mysqli_stmt_bind_param($result,'i',$id);

// prepared statement
 $result = mysqli_prepare($conn,$sql);

 // bind result set in variables
 mysqli_stmt_bind_result($result, $id, $name, $salary);

// execute
mysqli_stmt_execute($result);
// store result
mysqli_stmt_store_result($result);

// find number of row
$total_row = mysqli_stmt_num_rows($result);
echo "Total row: ".$total_row."<br>";

// fetch single data 
mysqli_stmt_fetch($result);
echo "id: ".$id." Name: ".$name." Salary: ".$salary."<br>";

// fetch all data from emp tabele
 while(mysqli_stmt_fetch($result)){
     echo "id: ".$id." Name: ".$name." Salary: ".$salary."<br>";
 }
// close prepared statement
mysqli_stmt_close($result);

// close connection
mysqli_close($conn);
?>