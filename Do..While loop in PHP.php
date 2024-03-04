<!-- Do..While loop in PHP
-> The do while loop is similar to while loop, but the condition is checked after the loop body is executed.
this ensure that the loop body is run at least once.
syntax: initialization
do{
     block of statements;
     increment/decrement;
}
while(condition);
-->
<!-- Example -->
<?php
 $num =1;
  do{
    echo "Testing count:$num <br>";
    $num++;
  }while($num<=3)
?>
