<!-- Passing Anonymous Function as Argument in PHP 
function show($a_fun){
    return $a_fun();
}
echo show(functio(){
    return "Testing";
});
-->
<?php 
function show($a_fun){
    return $a_fun();
} 
  echo show(function(){
    return "Testing";
}); // $a-fun = function(){ return "testing";}

?>