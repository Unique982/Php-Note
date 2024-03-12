<!-- formatting String in PHP 
 PHp provide two function that allow to formatting strings, whether to round doubles to a given number of deciaml places or define alignment within a field
 1. printf() -> The printf() function outputs a formatted string.
 sprintf() -> The sprintf() function return a formatted string
-->
<!-- Printf() example -->
<?php
$name ="Apple";
$price =100;
printf("Number %d",$price);
printf("testing %d code %d",2,2000);
 // (%d -> Format Specifiers or Conversion Specification)
?>