<!-- for loop with Associative Array in PHP -->
<?php
$a = array("Ram"=>100, "Sita"=>150, "Gita"=>200);
$keys = array_keys($a);
for($i=0;$i<count($keys);$i++){
// echo $keys[$i]."<br>";->//output-> Ram Sita Gita
echo $keys[$i]."=".$a[$keys[$i]]."<br>";//-> Output ->Ram=100 Sita=150 Gita=200
}
?>