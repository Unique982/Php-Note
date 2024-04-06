<!-- Reading Binary Reads in PHP 
fread() function reads up to length bytes from the referenced by hnadle.
Reading stops when length bytes have been read, of EOF(End of file) is reached.
This function is binary safe. This function returns the read styring or FASLE on Failure.
On system like windows you should open files for binary reading, mode 'rb' to work with
fread. since adding b to the mode does bo harm on other system , we will include it here for protability.
synatx ;- fread(filename,length)
ex: fread('text.txt',10);
It will read 10 bytes from file
-->
<?php 
   $handle = fopen('text.txt','rb');
    $data = fread($handle,"10");
   echo $data;
?>