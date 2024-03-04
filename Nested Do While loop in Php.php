<!-- Nested Do While loop in Php -->
<!-- When we insert a Do-while loop under a Do-while loop then, it is called Nested-Do-While loop. 
-->
<!-- Example -->
<?php
 $a =1;
 do{
    echo"Testing Count: $a<br>";
    $a++;
    $value = 2;
do {
    echo "Value :$value<br>";
    $value++;

}  while($value <=3);
}while($a <=2);
?>