<!--Nested While loop in PHP.php
 -> Nested while loops can be useful for iterating over multidimensional arrays, preforming complex
 data processiong or nay situation where you need to preform a repetitive task eithin another repetitive task.
 syntax:
  while(condition){
    while($condition){
        statement(s);
    }
    statement(s);
  }

  // 2nd example
    while(condition):
    while($condition):
        statement(s);
  endwhile;
  statement(s);
  endwhile;
-->
<!-- Example  -->
<?php
 $a = 1;
 while($a<=2){
 echo "Testing count: $a <br>";
 $a++;
 $val =1;
 while($val <=3){
    echo "Testing Value: $val <br>";
    $val++;
 }

 }
 echo"2nd way example";
 // 2nd way
 $a = 1;
 while($a<=2):
 echo "Testing count: $a <br>";
 $a++;
 $val =1;
 while($val <=3):
    echo "Testing Value: $val <br>";
    $val++;
 endwhile;

endwhile;
?>