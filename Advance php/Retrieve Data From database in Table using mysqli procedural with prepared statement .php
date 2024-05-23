<?php
$db_host = "localhost:3307"; 
$db_user = "root";
$db_password = "";
$db_name = "createdbtesting";

// craete connection
$conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);
// check connection
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Retrieve Data From database in Table using mysqli procedural with prepared statement </title>
</head>
<body>
    
        <?php
        // select query
        $sql = "SELECT id, name ,email from emp";
        // prepare statement
        $result = mysqli_prepare($conn, $sql);

        // bind result set in variables
        mysqli_stmt_bind_result($result, $id, $name, $email);
 // execute statement
 mysqli_stmt_execute($result);
 
 //store result 
 mysqli_stmt_store_result($result);
 if(mysqli_stmt_num_rows($result)>0){
    echo " <table border='1'>";
     echo "<tr>";
         echo "<th>Id</th>";
         echo "<th>Name</th>";
        echo " <th>Email</th>";
    echo " </tr>";
    // fetch result
    while(mysqli_stmt_fetch($result)){
        echo " <tr>";
        echo " <td>".$id."</td>";
        echo " <td>".$name."</td>";
        echo " <td>".$email."</td>";
    }
    echo "</table>";
    }


        
        ?>
    </table>