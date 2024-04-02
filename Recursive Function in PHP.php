<!-- Recursive Function in PHP
When function call it self known as recursive function.
Recursive function/ method calls with over 100-200 recursion levels cam smash the stack
and cause a termination of the current script. Especially, infinite recursion is considered a progrmamming error.
It is advisable avoid recursive function if possible.
-->
<?php 
function recur($a){
    if($a<=10){
        echo "$a <br/>";
        recur($a+1);// function calling it self
    }
}
recur(1);//calling function
?>
