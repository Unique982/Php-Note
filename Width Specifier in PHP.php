<!-- Width Specifier in PHP
Width specifier that says how many characters(minimun) this conversion should result in . the width specifier is an interger that should
be placed after the % sign that begins a conversion specification (assuming no padding specifier is defined). By default, Output is right aligend. To make it left align refix -sign to width
ex;
printf("%10s","h1");

-->
<!--  example-->
<?php
echo "<pre>";
printf("%10s <br>","HI");
printf("%-10s","HelloWorld");
echo "</pre>";
?>