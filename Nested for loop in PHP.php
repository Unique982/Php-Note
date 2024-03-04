<!-- Nested for loop in PHP -->
<!-- The statement block of a for loop lies completely inside the block of another loop.

Outerloop->    for(initialization:condition;increment or dicrement){
inner loop->    for(initialization; condition;increment or decrement){
        block of statements;
    }
    block of statements;
}
-->
<!-- Example -->
<?php
 for($i = 1; $i <=2;$i++){
    echo "Outer Loop:$i <br>";
    for($val=1; $val<=3; $val++){
        echo "inner Loop:$val <br>";
    }

 }
?>