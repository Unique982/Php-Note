<!-- Handle in Files in PHP -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handle</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <input type="submit" value="submit">
    </form>
</body>
</html>
<?php  
//  print_r( $_FILES['myfile']);
 echo $_FILES['myfile']['name'] ."<br>";
 echo $_FILES['myfile']['type'] . "<br>";
 echo $_FILES['myfile']['tmp_name'] . "<br>";
 echo $_FILES['myfile']['size'] . "<br>";
 echo $_FILES['myfile']['error'] . "<br>";

move_uploaded_file($_FILES["myfile"]['tmp_name'],"./upload video/".$_FILES["myfile"]['name']);
?>