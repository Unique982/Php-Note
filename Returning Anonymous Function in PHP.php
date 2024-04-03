<!-- Returning Anonymous Function in PHP
-->
<?php
 function test(){
 return function(){
    return "testing Returing anonymous <br/>";
 };
}
$a = test();
echo $a();

function show($str){
    return function() use($str){
       return "$str testing Returing anonymous";
    };
   }
   $a = show("test");
   echo $a();

?>