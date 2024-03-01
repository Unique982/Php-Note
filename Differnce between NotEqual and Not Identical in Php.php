<!-- Differnce between NotEqual and Not Identical in Php -->
<!--1. != -> Not equal -> 5!=2 -> output is True 1
    2. <> ->Not Equal -> $a <>$b -> True if $a is not equal to $b.
    3. !== -> Not Identical -> $a!==$b -> Truw if $a is not equal to $b, or they are not of the same type.
-->
 <!-- Example  -->
 <?php
  $a = 10;
  $b = 100;
  echo $a!=$b;//output is True and value is (1)
  echo $a<>$b;// output is True and value is (1)
  echo $a !==$b;//output is True and value is (1)
 
 ?>