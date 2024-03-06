<!-- for loop with Numeric array in PHP
->The foreach loop - Loops through a block of code for each element in an array or each property in an object.
-->
<!-- Example -->
<?php 
 $a = array("Ram","Sita","Testing","Gita");
 for($i=0;$i<=2;$i++){
    echo $a[$i];
 }
 //outpu
 //Ram Sita Testing

 // 2nd example using count function
echo"<br>";
 $b = array("Ram","Sita","Testing","Gita");
 for($i=0;$i<count($b);$i++){
    echo $b[$i] ."<br>";
 }
 // Output 
//  Ram
// Sita
// Testing
// Gita

// Example Sring interpolation
$c = array("Ram","Sita","Testing","Gita");
for($i=0;$i<count($b);$i++){
   echo "\$c[$i] =" .$c[$i] ."<br>";
}
// output 
// $c[0] =Ram
// $c[1] =Sita
// $c[2] =Testing
// $c[3] =Gita
?>