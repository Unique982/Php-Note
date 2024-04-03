<!-- Anonymous Function in PHP
Anonymous function also known as closures or lambda, allow the creation of function
which have no specified name.
. can be stored in a variable
. can be returned in a function
. can be pass in a function

syntax: function(){
    blocak of statement;
    
};

Variable scope in Anonymous Function
$y = 34;// Global variable
$a = function($p){
    echo "anonymous function";
};
$a($y);

$y = 10;// global variable
$x = 20;// global variable
$a = function($p) use($x){
    echo "Anonymous function $p $x";
};
$a($y);
-->
<?php 
// normal function
function test(){
    echo "function test <br/>";
}
test();

// anonymous function
 $a = function (){
    echo " anonymous function test <br/>";
};
$a();
// ex
$y = 34;//Global variable
$a = function($p){
    echo "anonymous function $p <br/>";
};
$a($y);

// ex
$y = 10;// global variable
$x = 20;// global variable
$a = function($p) use($x){
    echo "Anonymous function $p $x";
};
$a($y);

?>