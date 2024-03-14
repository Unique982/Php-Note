<!--sprintf() Function in PHP 
-> The sprintf() function returns a formatted string.
-> The Printf() function display data to the browser, which means that the result are not available to your script
-> The function sprintf(), which works in exactly the same way as printf() except that it returns a string that you can then store in a variable
-> syntax :
String sprintf("format_string",arg1,arg2,...);

sprintf("I have %d laptop and the price is %d each", 2,2000);// no display
$result = sprintf("I have %d laptops and the price is %d each",2,20000);
echo $result;
echo sprintf("I have %d laptops and the price id %d each",2,20000);
-->
<?php 

$result = sprintf("I have %d laptops and the price is %d each",2,20000);
echo $result;
echo sprintf("I have %d laptops and the price id %d each",2,20000);


?>
