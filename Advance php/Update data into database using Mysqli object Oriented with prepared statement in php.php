<?php

// connection code 
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
if(isset($REQUEST['update'])){

        $sql = "UPDATE emp SET id=?";

        //prepared statement
        $result = $conn->prepare($sql);

        // bind parameter
        $result->bind_param("i",$id);
        $id = $_REQUEST['id'];

        //bind result set in variables
        $result->bind_result($id,$name,$email,$password);
// execute statement
$result->execute();
//fetch 
$result->fetch();
// close prepared statement
$result->close();

    }




?>
<!doctype html>
<html lang="en">
  <head>
    <title>Update</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?php if(isset($name)) {echo $name ;}?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="<?php if(isset($email)) {echo $email;} ?>">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" value="<?php if(isset($password)) {echo $password;}?>">
        </div>
        <button type="submit" name="update" class="btn btn-danger" >add</button>
    </form>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>