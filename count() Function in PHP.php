<!-- count() Function in PHP 
-> The count() function returns the number of elements in an array.
syntax:- count(array,mode);
array - specifies the array.
mode - specifies the mode. Possible values.
0- Default. Does not count all elements of multidimensional arrays
1- counts the array rexursively(counts all the elements of multidimensional arrays)
-->
<!-- EXample -->
<?php
 $a = array("Hari","ram","Sita");
 echo count($a);// indexnumber not count not return, number of element count 

?>