<!-- Return Statement in PHP
 A return statement may be return any type data, including arrays and objects.
 syntax: return(variable or expression);
 ex: 
 retuen(3);
 return($x + $y);
 return($y);

 return(2,4);-> A function can't return multiple values.
 return(x,y);
 syntax: 
 function fucntion_name(para1,para2,...){
    block of statement;
    return(variable or expression);
 }
 ex: function add($x,$y){
    return($a+$b);
 }
-->
<?php
 function add($x,$y){
    return($x + $y);
 }
 echo add(20,200);// function call
// output -> 220
  // ex 
  function sum($a,$b){
    $sum = $a + $b;
    return($sum);
  }
  $total = add(19,20);
  echo "Total = $total";
  // output -> Total = 39
?>