<!-- Writing a File All a Once in PHP
file_put_contents() function is used to write string to a file. 
syntax: file_put_contents(filename,data,flag,context)
.-> filename -> filename is the name of the file you want to write.
-> data -> data is the string text to write
-> flag -> flag can be either FILE_USE_INCLUDE_PATH and/ or FILE_APPEND. Use
-> Context -> context is a file context.
This function automatically handle almost everything. we do not need to open file and close the file
we don't need file handle
-->
<?php 
if(  file_put_contents("new.txt","Hello",FILE_APPEND) ==FALSE)
{
    echo "Colud Not Write";
}
else{
    echo "success";
}
?>