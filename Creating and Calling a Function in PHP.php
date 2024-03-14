<!-- Function in PHP 
-> Creating Function 
syntax:- function function_name(){
    block of statements // body of function
}
Ex:- function display();
{
echo "Welcome to Testing";
}

// calling a function
syntax:- function function_name(){
    function_name();
    ex: display();

    Rules 
    -> Function name only starts with a letters, an underscore(_)
    -> Function name cannot start with a number
    -> Do not use Predefined constant name eg: PHP_VERSION, PHP_OS etc;
    -> Do not use reserved keywords. eg. else, if etc
    -> Function names are case-insensitive, though it is usually good form to call function as they appear in their declaration
-->
<?php
  function display(){
    echo "Welcome to Testing";
  }
  display();
?>