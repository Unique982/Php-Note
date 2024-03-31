<!-- Pass By Value in PHP 
Be default function arguments are passed by value (so that if the value of the argument within the function is changed,
it does not get changed outside of the function).When you pass data to a function, acopy of that data is passed. for example if you pass a variable, a copy is made 
of that variable and that copy is actually passed to the function.
-->
<?php 
// pass by value
$a = 10;
echo "value of a =$a </br>";
function sum($a){ // $a = $a = 10 here a is duplicate
$a =2;
} sum($a);
echo "Value of a = $a <br>";
?>