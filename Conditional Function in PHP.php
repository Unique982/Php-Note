<!-- Conditional Function in PHP 
can't call codition function before it's definition
syntax :-
 if(expression){
    function function_name(){
        blocak of statement;
    }
 }
  function_name(); // calling function
-->
<?php
 if(TRUE){
    function display(){
        echo "conditional Function";
    }
 }
 display();
?>