<?php
include 'config.php';

if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = $_POST['password']; 
  $sql = "SELECT id, username FROM student_rec WHERE username='{$username}' AND password='{$password}'";
  $result = mysqli_query($conn, $sql) or die("Query Failed");

  if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
          session_start();
          $_SESSION['username'] = $row['username'];
          $_SESSION['id'] = $row['id'];
        
          header("location:index.php");
      }

  } else {
    echo "<div class='alert alert-danger'>username and password not match</div>";
  }
}



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login-Logout System in PHP with Session</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card" style="margin-top:100px">
                    <div class="card-header" style="background:green;color:white;">
                        Login page
                    </div>
                    <div class="card-body">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                            <div class="form-group">
                                <label for="">User Name</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                          <input type="submit" name="login" value="Login" class="btn btn-dark w-100">
                        </form>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>