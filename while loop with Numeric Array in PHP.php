<!-- while loop with Numeric Array in PHP -->
<!-- Example -->
<?php
  $a = array("Ram","Sita","Gita","Hari","Arjun");
  $b = 1;
  while($b<count($a)){
    echo $a[$b] ;
    $b++;
  }
  // output :- Sita Gita Hari Arjun

?>