<!-- Super Global Variable in PHP
Superglobal are built-in variables that are always in all scopes.
-> $GLOBALS
-> $_SERVER
-> $_POST
-> $_REQUEST
-> $_SESSION
-> $_FILES
-> $_ENV
-> $_COOKIE
-> $_ENVIRONMENT
-> $_GET
-->
<?php
$a = 10;
$b =100;
function display(){
     echo $GLOBALS['a'] ."<br>";// 10
     echo $GLOBALS['b'] ."<br>";// 100
}
display()
?>