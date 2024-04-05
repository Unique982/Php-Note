<!-- Reading a Whole File at Once in PHP 
-> file_get_contents() Function is used to read entire file into a String.
This Function is the preferred way to read the contents of a file into a string.
Beacuse it will use memory mappig techniques, if this is supported by the server, of enchance performance.
This function is binary-safe (meaning that both binary data like images,and character data can be writtenn with the function).
The function returns teh read data or FALSE on Failure.
syntax: file_get_contents(filename,include_path,context, offset,maxlen)
filename-> it is the name of file or url.
include_path -> set this parameter to '1' or TRUE to specify that you want to search for the file in the PHP include path.
Context -> Context modify or enhance the behavior of the data stream from and to files.
offset -> It specifies where in the file to start reading.
maxlen -. It is the maximum length of data to read.

str_replace();
-. This function is used to replace all occurrences of the search string will the 
replacement string. This function returns a string or an array with the replaced values.
This function is binary-safe. This function is case_sensitive.
syntax: str_replace(search,replace,string,count)
ex: str_replace("Hello","Testing" $test,$i);
 search -> The value being searched for.
 Replace _ the replacement value that replaces found search value.
 String -> The string or array being searched and replaced on.
 Count -> Number of replacement performed.
-->
<?php 
$data = file_get_contents("File Handling in PHP.txt");
$impdate =str_replace("\n","<br/>", $data,$i);
echo $i;


?>