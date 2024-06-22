<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Img</title>
</head>
<body>
    <?php 
     include 'config.php';
     $sql = "SELECT * FROM imgupload";
     $result = mysqli_query($conn,$sql);
     if(mysqli_num_rows($result)){
        while($row = mysqli_fetch_assoc($result)){

     
    
    ?>
    <img src="./img/<?php echo $row['img'] ?>" alt="">
    <?php  } } ?>
</body>
</html>