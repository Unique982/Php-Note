<!-- Modifying and Deleting Array Element using unset function in PHP -->
<!-- Example -->
<?php 
 $a [0]= "Hari";
 $a [1] = "Sita";
 $a [2] = "Ram";
 $a [3] = "Gita";
 echo $a[1];
 $a[1]="Testing";// modifying the array example
 echo $a[1];

 // Deleting the array element example
 // unset() function is used to delete an array element

 $b [0]= "Hari";
 $b [1] = "Sita";
 $b [2] = "Ram";
 $b [3] = "Gita";
 unset($b[1]);
 echo $b[1];

   ?>