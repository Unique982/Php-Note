<!-- Alignment Specifier in PHP
-> Alignment specifier that says if the result should be left-justified or right justified.
the default is right-justified ; a negative sign(-) will make it left justified.
 ex:
 printf("%10s","hello");
 printf("%-10s","world");
-->
<!-- Example -->
<?php 
 echo "<pre>";
 printf("%10s","hello");
 printf("%-10s","world");
 echo "</pre>";
?>
