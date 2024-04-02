<!-- Calling Function with Condition in PHP
// ex
if(expression){
    function function_name(){
        blocak of statement
    }
}
if(expression){ // calling function
    function_name();
}

-->
<?php 
if(TRUE){
    function display(){
      echo "Condition Function";
    }
}
if(TRUE){ // calling function
    display();
}
?>