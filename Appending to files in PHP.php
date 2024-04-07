<!-- Appending to files in PHP
you can append data to file using fwrite function but you have to open your file with 'a' mode.
-->
<?php 
 $handle = fopen('new.txt','a');
 fwrite($handle, "Testing nep");

?>