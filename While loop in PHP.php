<!-- While Loop -->
<!-- The while loop keeps repeating an action untiil an associated condition returns fasle.
->The while loop executes a block of code as long as the specified condition is true.
syntax: initialization;
while(condition){
    blocak statement
    increment/ decrement
}
// 2nd way
initialization;
while(condition):
    blocak statement
    increment/ decrement
endwhile;
 -->
 <!-- Example -->
 <?php
  $num =1;
  while($num <=5){
    echo "Testing".$num;
    $num++;
  }
    echo "failed";
    
    // 2nd example
    $num =1;
    while($num >=5):
      echo "Testing".$num;
      $num++;
    endwhile;
      echo "failed <br>";
      // 3rd example
      $a = 1;
      while(TRUE){
        echo "Testing".$a;
        $a++;
        if($a ==5)
        break;
      }

 ?>

 