<!-- Ternary OR Condition Operator in Php -->
<!-- It works similar as if else statement
syntax:- 
variable = condition? Expression 1:Expression 2;
1. if condition True then return Expression 1
2. if condition False then return Exapression2 -->
<!-- Example -->
<?php 
 $a = (10>100) ? "Greater" : "Less";
 echo $a;

 // 2nd example
if(100-100<10){
    echo "Greater";
}
else{
    echo "Less";
}

?>