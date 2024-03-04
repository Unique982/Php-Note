<!-- Break and Continue Statement in PHP -->
<!--Break -> This statement is used to stop loop or switch statement at any time/
continue -> This statement is used to skip an iteration of a loop -->
<!-- Example -->
<?php
 for($num = 1; $num <=10;$num++){
    echo "Testing count:$num <br>";
    if($num==5)
    break;
 }

 // continue example
 for($i = 1; $i <=10;$i++){
   
    if($i==5)
    continue;
    echo "Testing count:$i <br>";
 }

?>