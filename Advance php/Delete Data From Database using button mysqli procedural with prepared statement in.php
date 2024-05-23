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
if(isset($_REQUEST['delete'])){
    // delete Sql query
    $sql= "DELETE FROM emp";
    // prepared statement
    $result = mysqli_prepare($conn,$sql);
    if($result){
        // bind variables to prepared statement as parameter
        mysqli_stmt_bind_param($result,'i',$id);

        //variable and value 
        $is = $_REQUEST['id'];

        // execute prepared statement
        mysqli_stmt_execute($result);
        echo mysqli_stmt_affected_rows($result)."Row deleted";
    }
    // close statment
    mysqli_stmt_close($result);
} 
?>