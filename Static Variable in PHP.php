<!-- Static Variable in PHP 
-> A variable within a function reset every time when we call. In case if we need, variable values to remain save even
outside the function thwn we have to use static keyword.
function display(){
    static $a=0;// static variable
    $a++;
    return $a;
}
echo "Celling static variable's Function </br>";
echo display()."<br>";
-->
<?php
function display() {
 static$a =0;
$a++;
return $a;
}
echo display(). "<br>"; // 1st  time call return 1
echo display(). "<br>";// 2nd time call return 2
?>