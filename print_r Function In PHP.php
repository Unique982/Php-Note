<!-- print_r Function In PHP.php
This function is used to display information in a way that's readable by humans.
synatx: print_r($a)->array name here
return can be true or false. by default there is false
when return is set t true, print_r() will return the information
-->
<!-- Example -->
<?php 
$b = array("Ram"=>150,"sita"=>200,"Gita"=>100);
print_r($b,true);// return value store echo $b;
$a = array("Ram"=>150,"sita"=>200,"Gita"=>100);
echo "<pre>";
print_r($a);
echo "</pre>";// output-> Array( [Ram] => 150 [sita] => 200 [Gita] => 100)
?>