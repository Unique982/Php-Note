<!-- Reading a File Character by Character in PHP 
-> fgetc() Function is used to read a single character from a file.
fgetc() function returns FALSE when there are no more characters to read.
syntax: fgetc($file_handle);
ex : fgetc($handle); 
-->
<?php

$handle= fopen("File Handling in PHP.txt", "r");
while($char = fgetc($handle)){
    if($char == "\n"){
        $char = "<br/>";
    }
    echo $char;
}
// echo $char;// single character

?>
