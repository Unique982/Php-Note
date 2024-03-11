<!-- for loop with Multi D associative Array in Php -->
<!-- Example -->
<?php 
$num = array(
    $a = array("Ram"=>100,"sita"=>200),
    $b = array("Hari"=>100,"Gita"=>1000)
);
$keys = array_keys($num);
for($i=0;$i<count($num);$i++){
    $num_keys=array_keys($num[$keys[$i]]);
    for($j=0;$j<count($num_keys);$j++){
 echo ($keys[$i]. '' . $num_keys[$j]. ''.$num[$keys[$i]][$num_keys[$j]]. "");
    }
}

?>