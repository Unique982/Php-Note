<?php 
 include 'config.php';
 if(isset($_POST['submit'])){
   
   $file_name = $_FILES['img']['name'];
   $file_type = $_FILES['img']['type'];
   $temp_name = $_FILES['img']['tmp_name'];
   $file_size = $_FILES['img']['size'];
   $file_folder = "img/".$file_name;
   if(move_uploaded_file($temp_name,$file_folder)) 
   {
    $sql = "INSERT INTO `imgupload` (img) VALUES('$file_name')";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "upload successfully";
    }
    else{
        echo "upload failed";
    }
   }
   else{
    echo "Please select file";
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload </title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="Upload Img">Upload Img</label>
<input type="file" name="img">
<input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>