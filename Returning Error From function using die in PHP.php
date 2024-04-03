<!-- Returning Error From function using die in PHP
When a function return False, we can use the die function in php to print an error message.
when php call die function, the application quits.
die("message");
ex: 
function disp(){
    disp() or die("Error:application22zxzz");
}
-->
<?php
echo "testing </br>";
function test($a){
    if($a<=10){
        echo "$a</br>";
        return TRUE;
    }
    else{
        return FALSE;
    }

}
test(5) or die("Error:Enter Valid Number");
echo ("Rest of the code")
?>