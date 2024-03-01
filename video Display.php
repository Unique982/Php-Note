<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display video</title>
</head>
<body>
    <?php
      $conn= mysqli_connect("localhost:3307","root","","bcathird") or die ("Connection is not established");
      $sql = "SELECT * FROM video_upload";
      $result = mysqli_query($conn,$sql) or die("Query Failed ");
      if(mysqli_num_rows($result)){
        while ($row = mysqli_fetch_array($result)){
    ?>
    <div>
       <video controls width="30%" height="305">
        <source src="upload video/<?php echo $row['video'];?>">
       </video>
    </div>
    <div>
        <?php }} ?>
    </div>
    
</body>
</html>