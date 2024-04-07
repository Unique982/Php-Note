<!-- Delete Files in PHP 
unlink() function is used to delete a file. It returns TRUE on success or FALSE on Failure
syntax: unlink(filename,context)
ex: unlink("test.txt");
-->
<?php 
// unlink("test.txt");
if(unlink("text.txt")){
    echo "Successfully deleted";
}
else{
    echo "Failed to delete file";
}

?>