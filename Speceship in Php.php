<!-- Speceship in Php -->
<!-- 1. === -> Identical -> $a===$b -> True if $a is equal to $b and they are of the same type
  2. <> Not equal -> $a<>$b -> True if $a is not equal to $b.
  3. !== -> Not Idential -> $a!=$b -> True if $a is not equal to $b, or they are not of the same type
  4. <=> -> Spaceship $a <=> $b -> It returns -1, 0 or 1 when $a is respectively less than, equal to ,or greater than $b 
-->   
<!-- Example -->
<?php
 $a = "a";
 $b= "b";
 echo $a<=>$b; // output  -1 
 ?>