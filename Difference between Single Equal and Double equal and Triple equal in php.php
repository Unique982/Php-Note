<!-- Difference between Single Equal and Double equal and Triple equal in php.php -->
<!-- 7. === -> identical -> True if $a is equal to $b and they are of the same type ex:  $a===$b;
5. == ->equal to -> $a = 10; $b= 19; $c = $a==$b; ouput is True.
-->
 <!-- Example  -->
 <?php
 // equal ex
 $a = 10;
 $b = "10";
echo  $a == $b; // (1-> is true and 0 is false)

// 3=== equal ex
$x = 10;
$y = "20";
echo $x ===$y;// datatype is not same and output is empty 1. datatype and value is same this case only output is true and datatype and value is not same then output is false.
 

// 2nd ex
echo"<br>";
$num1 = 100;
$num2= 100;
if($num1===$num2){
    echo "condition is eqaul";
}
else{
    echo "Condition is not equal";
}
 ?>