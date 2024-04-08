<!-- HTML CSS and Javascript with PHP 
<?php 
echo "<h1> Testing</h1>";
echo "<input type='checkbox' value='test'/>";
$a = "Happy new year";
echo "<input type='checkbox' value='$a'/>";
?>
-->
    <!-- javascript using inside php
 echo "<script>alert('Hello');</script>";
-->

<!-- Php inside HTMl
<p><?php echo "hello" ?></p>
-->

<!-- Some example -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // using html inside php example
    echo "<p>Hello</p>";
    // using variables
    $a = "Welcome to coding pages";
    echo "<h1> $a</h1>";
    echo "<input type='text' value='$a'/>";
    // using css 
    echo "<h1 style='color:red;'> $a</h1>"; 
    // using javascript
    echo "<script>alert('testing');</script>";
    ?>
    <!-- php inside html some example -->
    <h1>Php inside html some example</h1>
    <p><?php 
    echo "testing example";
    ?></p>
    
</body>
</html>



