<!-- Type of Variable and IT's scope 
1. local variable
2. Global variable
3. Static variable

-> the variable which is declared inside a function has a LOCAL scope. it value remains valid just within the function.
function display(){
    $a = 10;// local variable
} dipslay();
// below code will not work, can't access $a outside function
// echo "Accessing value outside Function = $a <br>"
-->
<?php
 function display(){
    $a = 10;// local variable
    echo "Accessing value inside Function = $a <br>";
 }
 display();
 echo "Accessing value outside Function = $a <br>";// output error undefined
?>