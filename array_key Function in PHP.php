<!-- array_key Function in PHP 
-> The array_key() function returns an array containing the keys.
syntax:- array_keys(array,value,strict)
Array - specifies an array *
value - You can specify a value, then only the keys with this value are returned
strict -> Used with the value parameter. possible values
 true-> Returns the keys with the specified value, depending on type: the number 8 i snot the same as the string"8";
 false-> Default value. Not depending on type, the number 8 is the same as the string"8".
-->
<!-- Example -->
<?php
$a = array("Ram"=>100, "Sita"=>150, "Gita"=>200);
$keys = array_keys($a);
echo $keys[1];// output :Sita
?>