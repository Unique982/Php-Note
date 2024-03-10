<!-- for loop with Multi D Numeric Array in PHP.php -->
<?php
 $new = array(
 array("ram","Html",100),
 array("GIta","Php",101),
 array("Hari","CSS",102)
 );
 for($i=0;$i<count($new);$i++) {
   for($j=0;$j<count($new[$i]);$j++){
    echo $new[$i][$j];//output-> ram Html 100 ,GIta Php 101 ,Hari CSS 102
   }
}
?>