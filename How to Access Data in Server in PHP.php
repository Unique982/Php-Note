<!-- How to Access Data in Server in PHP
-> Super Global Variables
*-> Super Global are bulit-in variable that are always available in  all scopes
 $GLOBALS
 $_SERVER
 $_REQUEST -> The $_REQUEST variable is a variable with the contents of $_GET and $_POST and $_COOKIE variables.
 -> Whether we use GET OR POST method in the form tag to pass the data, we can find that data is server using $_REQUEST array.
 -> we have to pass key to  this array for accessing the specific  data and key can be name attributes of tag
 $_POST -> if we use POST Method in the form tag to pass the data we can find the data in server using $_POST array.
 -> we have to pass key to this array for accessing the specific dat aand key can be name attribute of tag.
 $_GET -> If we use GET Method in the form tag to pass the data we can find that data in server using $_GET array.
 ->we hacve to pass key to this array for accessing the specific data key can be name attributes of tag.
 $_FILES
 $_ENV
 $_COOKIE
 $_SESSION
-->
<!-- Example -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exampel</title>
 </head>
 <body>
    <form action="" method="POST">
    username : <input type="text" name="username">
        pasword : <input type="password" name="password">
        <input type="submit" name="submit">

    </form>
    <?php 
    // using  get Method
//    echo  $_GET["username"];
   // using post method
   echo $_POST["username"];
   // using Rquest method
 echo   $_REQUEST["username"];
    ?>
 </body>
 </html>