<!-- Pass By Reference in PHP 
When you pass an argument by reference, that gives code in the function direct access to that argument back in the calling code.
To have argument to a function always passed by refernce, prepend and ampersand(&) to the parameter name in the function definition.
 ex;
 function add(&$a);
-->
<?php 
$n = 10;
echo "Value of n = $n <br/>";
function add(&$a)
{
 $a =100;
}
add($n);
echo "Value of n = $n <br/>";
?>