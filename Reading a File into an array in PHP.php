<!-- Reading a File into an array in PHP 
file() function is used to read entire file into an array. This function is binary-safe
This function Returns the file in an array. Each element of the array corresponds to a line
in the file, with the new line still attached. Upone failure, file() return FASLE.
Synatx: file(filename, include_path, context)
ex: file("file.txt"); 
-->
<?php
   $data = file("text.txt");
//    print_r($data);
echo $data[0] . "<br/>";
   echo $data[1] . "<br/>";
   echo $data[2] . "<br/>";
   foreach($data as $line){
    echo $line . "<br/>";
   }
?>
