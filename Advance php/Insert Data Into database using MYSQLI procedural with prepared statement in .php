<?php 
// connection file add
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
// insert  query
$sql = "INSERT INTO emp(name,email)VALUES(?,?)";

// prepare statement
$result = mysqli_prepare($conn,$sql);
if($result){
    // bind variable to prepared statement
    mysqli_stmt_bind_param($result,'ss',$name,$email);

// variable and value
$name ="Testing";
$email= "example@example.com";

// execute prepared statement
mysqli_stmt_execute($result);
echo "New record created successfully";}
//close statement
mysqli_stmt_close($result);

// close database connection
mysqli_close($conn);
?>