<!-- Returning Array From FUNCTION in PHP -->
<?php
// Returing Array
function test($num1,$num2){
 $sum = $num1 + $num2;// 30
 $sub = $num1 - $num2;//10
 $mul = $num1 * $num2;//20
 $div = $num1 / $num2;//02
 $solution =array($sum,$sub,$mul,$div);
 return $solution;
}
$sol= test(20,10);
echo $sol[0];// 30
echo $sol[1];//10
echo $sol[2];//20
echo $sol[3];//02
?>