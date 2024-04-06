<!-- Checking if a File Exists in PHP 
file_exists() function is used to check whether or not a file or director exists
This function return TRUE if this file exists, FALSE otherwise
syntax: file_exists(filename);
Ex: file_exists("texrt.txt");
-->
<?php 
//  echo file_exists("text.txt");
 $filename="text.txt";
 if(file_exists($filename)){
    echo "$filename file is there";
 }
 else{
    echo "File does not exist";
 }
?>