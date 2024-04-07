<!-- Writing to a File in PHP 
fwrite() function is used to write to an open file. This function returns the number of bytes written of FASLSE if there wa an error. The 
function will stop at the end of the file or when it reaches the specified lenght, which ever comes first. This function is binary safe
syntax: fwrite(file,string,length)
ex: fwrite($handle,"Hello world!");

-->
<?php 
//  $handle = fopen("new.txt","w");
//  fwrite($handle,"Hello world!");
 $handle = fopen("new.txt","a");
//  fwrite($handle,"Hello !");
 if(fwrite($handle,"testing") == FALSE)
 {
    echo "colud not write";
 }
 else{
    echo " successfully write";
 }
 fclose($handle);
?>