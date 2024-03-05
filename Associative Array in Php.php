<!-- Associative Array in Php -->
<!-- Declaration and initialization of Array 
 syntax :- $array_name["Key"]=value;
 ex:- $array_name["Ram"]=100;
 case sensitive 
-->
<!-- Example -->
<?php
   $name ["hari"] =1;
   echo $name['hari'];
 echo "Testing : {$name["hari"]}";
   // example 2
  $a = array("Hari"=>100,"Ram"=>1000,"Gita"=>500);
   echo "<pre>";
   print_r($a);
   echo "</pre>";
   
   // example 3
    $b ["hari"] =1;
    $b ["Gita"] =2;
    echo "<pre>";
    print_r($b);
    echo "</pre>";

?>