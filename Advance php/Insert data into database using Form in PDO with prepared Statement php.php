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
if(isset($_REQUEST['submit'])){
    // checking for empty filed
    if(($_REQUEST['name']=="") ||($_REQUEST['email']=="") ||($_REQUEST['password']=="")){
        echo"Fill all the fields";
    }
    else{
        // using named placeholder
        $sql = "INSERT INTO emp(name,email,password) VALUES(:name,:email,:password)";
     // prepared statement 
     $result = $conn->prepare($sql);
     // bind parameters to paepared Statement
     $result->bindParam(':name',$name, PDO::PARAM_STR);
     $result->bindParam(':email',$email, PDO::PARAM_STR);
     $result->bindParam(':password',$password, PDO::PARAM_STR);
 /// variables and values
 $name =$_REQUEST['name'];
 $email =$_REQUEST['email'];
 $password =$_REQUEST['password'];

     // exectute prepared 
$result->execute();
echo $result->rowCount()."Inserted successfully";
// close prepared Statement
unset($result);    
}

}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 class="text-center">Insert data into database using Form in PDO with prepared Statement php</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone">Address:</label>
                <input type="text" name="address" id="address" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="text" name="password" id="password" class="form-control">
            </div>
            <input type="submit" value="Submit" name="submit" class="btn btn-primary">
                <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
</body>
<?php // close connection
$conn =null; ?>
</html>