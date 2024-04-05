<!-- Closing a File in PHP 
-> fclose() Function is used to close an open file. Closing the file frees up the
resources connected  with that file.
This function returns TRUE if the file was closed successfully and FALSE otherwise.
syntax: fclose($file_handle);
ex : fclose($handle);
-->
<?php 
$handle= fopen("File Handling in PHP.txt", "r");

while(!feof($handle))
{
    $data = fgets($handle);
    echo "$data <br/>";
}
fclose($handle);
?>