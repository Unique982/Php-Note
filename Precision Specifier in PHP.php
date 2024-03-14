<!-- Precision Specifier in PHP
When using the f or F type specifier to format floats, Php defaults to a precision of 6 decimal places.
ex:- printf("%f",10) // 10.000000
2-> Precision specifier in the form of a period(.) fllowed by the number of decimal digits should be displayed for
floating-point numbers. ITs goes right before the type specifier.
ex :  printf("%2f",10); //10.00
3-> When using padding specifier with a precision specifier then printf() pads the entire value, including the decimal point and
decimal digits, to the specified length.
ex:- printf(%08.2f",45);// 00045.00 
4 -> When using precision specifier on a string (s type specifier), it acts as a cutoff point,Setting a maximum character limit to the string
ex: printf("%2s", "testing");

-->
<!-- Example -->
<?php 
  printf("%f <br>",10);// 10.000000
  printf("%.2f <br>",10);//10.00
  printf("%08.2f <br>",45);// 00045.00 
  printf("%.2s", "testing");//te

?>
