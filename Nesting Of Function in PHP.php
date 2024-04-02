<!-- Nesting Of Function in PHP 
function inside function.
ex:
function outer_function(){
    block of statement;
    function inner_function(){
        block of statement;
    }
}
we can't call inner function without calling outer function. First make call to 
outer then inner.

-->
<?php
function display(){// outer_function
    echo "I am outer function<br/>";
function inner(){// inner_function
 echo "I am inner function<br/>";
}
}
display();// I am outer function
inner();//I am inner function
?>