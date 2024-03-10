<!-- foreach loop with Multi D Numeric Array in PHP -->
<!-- Example -->
<?php
$subject = array(
 "Php" => array("Hari"=>100,"Sita"=>200),
 "HTML" => array("Gita"=>500,"Ram"=>1000)
);
foreach($subject as $values){ // keys=> $values
    foreach($values as $test){
  echo $test;
  echo "<br>";
  // ouput -> 100 200 500 1000
}
}
// 2nd example 
$teacher = array(
    "Php" => array("Hari"=>100,"Sita"=>200),
    "HTML" => array("Gita"=>500,"Ram"=>1000)
   );
   foreach($teacher as  $keys=>$values){ // keys=> $values
       foreach($values as $key=>$out){
     echo $keys ." " .$key . " " .$out;
     echo "<br>";
     // ouput -> 100 200 500 1000
   }
   }
// 2nd example 
$course[0][0]=100;
$course[0][1]=200;
$course[1][0]=1000;
$course[1][1]=300;
foreach($course as $keys=>$values){
    foreach($values as $key=> $new){
        // echo $new;// 100 200 1000 300
        echo"<pre>";
  echo "[".$keys ."]" ,"[". $key ."]". "= " .$new;
  echo"</pre>";
  // ouput -> [0] [0]= 100 [0] [1]= 200 [1] [0]= 1000 [1] [1]= 300
}
}


?>