<!-- Reading a File in PHP 

whileloop
feof() function
fgets() function

 -> feof() function
 -> This function tests for end of  file on a file handle. You pass this function a file handle, and it returns true if you are at the end
 of  the file. This function  is useful for looping through data of unknown length
 syntax : feof($file_handle);
 ex : feof($handle);

 fgets() Function
 -> This function is used to read a single lin eform a file. You can pass this function a file handle correcsponding to an open file, and
 optiona length.
 syntax : fgets($handle); 
 if no length specified, the length default to 1024 bytes.
-->
<?php
$handle= fopen("File Handling in PHP.txt", "r");
// echo fgets($handle); // line by line read
while(!feof($handle))
{
    $data = fgets($handle);
    echo "$data <br/>";
}
?>