<!--           String Interpolation
-> String interpolation is a quick shortcut allowing to pop the valueof a 
variable into a double quoted string.
-> example -->
<?php
  $num1= 10;
  $num2= 20; 
  $sum = $num1 + $num2;
  echo "The sum of a+b is:".$sum;
  echo "<br>";
  // EXAMPLE 1
  $name = "Testing";
  echo "{$name}success";
  echo "<br>";
  // EXAMPLE 2
  $value = 10;
  echo "$value Apple price \$ten";
?>
<!-- Rules 
1. Surround the variable name with spaces
ex :-> echo "$valueis good price";// Wrong this ex 
ex:- echo "$value is good price";// correct this ex
2. Do not use Single quotation mark- when you use single quotation marks, PHP does not applyy string interpolation.
ex:- $value =10;
   echo "apple Price $ten";// wrong this ex
     echo "$value Apple price \$ten";// correct this ex

-->