<!-- String Functions in Php -->
<!--1. strlen(string) -> This Function is used to find length of string. it also counts whitespace 
 2. strtoupper(string) -> This function is used to convert a string to uppercase
 3. ->strtolower(string) -> This function is used to convert a string to lowercase
 4. trim -> Strip whitespace(or other chararcters) From the beginning and end of a string
 5. ucfrist -> Make a string's first character uppercase
 6. ucwords -> Uppercase the first character of ecah word in a string
 7. vfprintf -> Write a formatted string to a stream
 8. vprintf -> Output a formatted string
 9. vsprintf-> return a formatted string
 10. wordwrap -> wraps a string to a given number of characters.
  11. addcslashes -> Quote string with slashes in a c Style
  12. addslashes -> Quote string with slashes
  13. bin2hex -> Counvert binary data into hexadecimal representation
  14. chop -> Alias of rtrim
  15. chr -> Return a specific character
  16. chunk_split -> Split a string into smaller chunks
  17.convert_cyr_string -> Counvert from one cyrillc character set to another
  18. convert_uudecode -> Decode a uuencoded string
  19. convert_uuencode -> Unencode a string
  20. Count_chars -> Return information about characters used in a string
  21. crc32 -. Calculate the crc32 polynomial of string
  22. crypt -> One way string hashing



-->
<!-- Example -->
<?php 
  $name ="Testing Code";
  $b = strlen($name);// echo strlen("testing Code");
  echo $b;// output -> 12

  // strtoupper(string) eaxmple
echo  strtoupper("testingcode");// output -->TESTINGCODE
 echo strtoupper($name );// TESTING CODE
 echo "<br>"; // br break line
 // strtolower(string) example
 echo strtolower("EXAMPLE");// example
 echo strtolower($name);// testing code
?>