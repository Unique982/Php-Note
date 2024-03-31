<!-- Type Declaration in PHP 
Type declarations simply means specifying which type of variable is being set
instead of allowing php to set this automatically. if the given value is of the incorrect 
type, then an error is generated.
Type declarations were also known as type hints in PHP 5.
1. Scalar Type Declarations.
2. Return Type Declarations.
type description varsion
Class/Interface Name-> The parameter must be instance of the given class or interface name.PHP 5.0
self-> the parameter must be an instance of the same class as the one the  method is defined on . this
can only used on class and instance methods. PHP 5.0
array -> the parameter must be an array PHP5.1.
callable -> The parameter must be a valid callable. PHP.4.
int -> The parameter must be an integer.PHP7.0.
float -> The parameter must be a float point number. PHP7.0
string -> the parameter must be a string. PHP 7.0.
bool -> The parameter msut be a boolean value. PHP 7.0.
iterable -> The parameter must be either an array or an instance of Traversable. PHP 7.1.
-->
<?php 
function sum(float$a,float$b){// type declaration(int,float,double...)
    return ($a + $b);
}
echo sum(2.2,101.1);
// output 103.3
function test(int $x,int $y)
{
    return($x+$y);
}
echo test(10.2,122.2)
// output 132
?>