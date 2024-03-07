<!-- while loop With Associative Array in PHP -->
<!--  Example-->
<?php
  $a = array("Ram"=>100,"Sita"=>200,"Gita"=>300,"Hari"=>400,"Arjun"=>500);
  $keys = array_keys($a);
  $b = 0;
  while($b<count($keys)){
 echo $keys[$b]."". $a[$keys[$b]];
 $b++;
  }
  // output :- Ram100 Sita 200 Gita 300 Hari 400 Arjun500

?>