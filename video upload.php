<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Upload</title>
</head>
<body>
    
<h1>Vedio Upload in php</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="video"><br>
    <input type="submit" name="upload" value="upload">
</form>
<?php 
if(isset($_POST['upload'])){
//  $name = $_FILES['video'];
// echo "<pre>";
// print_r($name);
$file_name = $_FILES['video']['name'];
$file_type=$_FILES['video']['type'];
$temp_name = $_FILES['video']['tmp_name'];
$file_size = $_FILES['video']['size'];
$file_folder = "upload video/".$file_name;
 if(move_uploaded_file($temp_name, $file_folder)){

    $conn= mysqli_connect("localhost:3307","root","","bcathird") or die ("Connection is not established");
    $sql = "INSERT INTO video_upload(video) values('$file_name')";
    if(mysqli_query($conn, $sql)){
        echo "video uploaded successfully";
 }
 else{
    echo  "something went wrong";
 }
}
else{
   echo "lease select a video to uploaded.";
   
}
}

?>
</body>
</html>
