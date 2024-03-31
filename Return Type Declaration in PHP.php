<!-- Return Type Declaration in PHP 
In php 7, a new feature , return type declarartions specify the type of the value
that will be returned from a function. To specify the return type, we add a colon and then the 
valid type right  before the opening curly bracket.
 ex:
 function sum($a, $b) {
    return $a+$b;
 }
 echo sum (2,10)

 // 
 declare(strick_type=1);
 function sum($a, $b) {
    return($a+$b);
 }
 echo sum(10,100)// 110;
 echo sum(21.1,11.11)// error
-->
<?php 

function sum(int$a, int$b) {
    echo '$a is'.gettype($a)."type variable and value =$a<br/>";
    echo '$b is'.gettype($b)."type variable and value =$b<br/>";
    return($a+$b);
 }
 echo sum (2,10)

?>