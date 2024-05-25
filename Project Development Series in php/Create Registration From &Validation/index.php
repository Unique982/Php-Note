<?php
 // define error variables for form validation
$nameErr= $emailErr= $numberErr= $countryErr= $courseErr= $gender= $agree ="";
$name=$email=$number=$country=$course=$gender=$agree="";
//compare the method
if($_SERVER["REQUEST_METHOD"] =="POST"){
if(empty($_POST['name'])){
$nameErr="Name is Required";
}else{
$name = input_data($_POST['name']);
//check name 
if(!preg_match("/^[a-zA-Z]*$/",$name)){
$nameErr="Alphabets and White space are allowed";
}
}
if(empty($_POST['email'])){
$emailErr = "Email is required";
}
else{
$email=input_data($_POST['email']);
// check that email address is well-formed
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
$emailErr= "Invalid Email formate";
}
}

if(empty($_POST['number'])){
$numberErr="number is required";
}
else{
$number = input_data($_POST['number']);
// check number is well-fomate
if(!preg_match("/^[0-9]*$/",$number)){
$numberErr="Only numerica value is allowed ";
}
if(strlen($number)!=10){
$numberErr="Number no must contain 10 digits";
}
}

if(empty($_POST['country'])){
$countryErr="Country is required";
}else{
$country=input_data($_POST['country']);
}
if(empty($_POST['course'])){
$courseErr="Course is required";
}else{
$course=input_data($_POST['course']);
}
if(empty($_POST['gender'])){
$genderErr="Gender is required";
}
else{
$gender =input_data($_POST['gender']);}

if(empty($_POST['agree'])){
$agreeErr="Please Accept term and condition before submitting the form";
}else{
$agree=input_data($_POST['agree']);
}

}


function input_data($data){
// remove space slashes aspecial symbol
$data = trim($data);
$data = stripslashes($data);
$data =htmlspecialchars($data);
return true;

}

 ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Create Registration From &Validation</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

<div class="container">
<div class="row justify-content-center">
<div class = "col-md-6 mx-auto">
<div class="card-header text-black text-center">Create Registration From &Validation</div>
<div class="card-body">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<div class="form-group">
<label>Name</label>*
<input type="name" name="name" class="form-control" placeholder="Enter Your Name">
<small style="color:red;"><?php echo $nameErr; ?></small>
</div>

<div class="form-group">
<label>Email</label>*
<input type="email" name="email" class="form-control" placeholder="Enter Your Email">
<small style="color:red;"><?php echo $emailErr; ?></small>

</div>
<div class="form-group">
<label>Mobile Number</label>
<input type="number" name="number" class="form-control" placeholder="Enter Your Number">
<small style="color:red;"><?php echo $numberErr; ?></small>
</div>
<div class="form-group">
<label>Country</label>
<select name="country" class="form-control">
<option selected disabled>Select</option>
<option value="Nepal">Nepal</option>
<option value="USA">USA</option>
<option value="Oman">Oman</option>
<option value="Japan">Japan</option>
</select>
<small style="color:red;"><?php echo $countryErr; ?></small>
</div>
<div class="form-group">
<label>Course</label>
<input type="checkbox" name="course" value="java" class="form-control-checkbox">JAVA
<input type="checkbox" name="course" value="php" class="form-control-checkbox">PHP
<input type="checkbox" name="course" value="html" class="form-control-checkbox">HTML
<br>
<small style="color:red;"><?php echo $courseErr; ?></small>
</div>
<div class="form-group">
<label>Gender</label>
<input type="radio" name"gender" value="male" class="form-radio">Male
<input type="radio" name="gender" value="female" class="form-radio">Female
<input type="radio" name="gender" value="other" class="form-radio">Other
<small style="color:red;"><?php echo $genderErr; ?></small>
</div>
<div class="form-group">
<label>Agree To term of Service</label>
<input type="checkbox" name="agree" class="form-control-checkbox">
<small style="color:red;"><?php echo $agreeErr; ?></small>
</div>
<button class="btn btn-danger" type="submit" name="reg">Reister</button>

</form>
</div>
</div>
</div>
</div></div>








      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>