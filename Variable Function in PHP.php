<!-- Variable Function in PHP
 function one() {echo "function";}
 function two() {echo "function";}
 function three() {echo "function";}
$f_variable = "one";// function name to a variable
$f_variable();// sign must
 one();
 All function are indiidual so they can have their own different arguments/ parameters.
-->
<?php
function one() {
    echo "I am One <br/>";
}
function two() {
    echo "I am Two <br/>";
}
function three() {
    echo "I am three <br/>";
}
$f_variable ="three";// assigning function name to a variable
$f_variable();// calling function have to write $ sign
?>