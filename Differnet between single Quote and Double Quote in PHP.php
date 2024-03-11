<!-- Differnet between single Quote and Double Quote in PHP 

->diff-> Single Quote is said to be literal. It doesn't parse the data.
->diff->  Double Quote is said to be interpreted
-> We can't use single quotes with in single quote.
-> we can't use double quotes with in double quote.
->   we can use double qoute within single quote.
-> we can use single quote withing double quote
-> use escape\ to use double quote within double quote
-> use escape\ with single quote within single quote
-> diff-> \' and \\ only these two works with single quote
-> diff-> All escape sequences works with double quotes.
-->
<!-- example -->
<?php 
 $number =100;
 echo "$number <br>";
 echo '$number';
 echo 'hello world <br>';
 echo "Hello world <br>";
 echo "hello'world' <br>";
 echo 'hello"world" <br>';
 echo "hello \"world\" <br>";
 echo 'hello\'world\' <br>';
 echo '\\ <br>';
?>