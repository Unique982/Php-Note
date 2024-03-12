<!-- Coversion Specification in PHP
Format Specifer / Conversion Specifier
Each conversion specification begins with a percent sign(%), followed by one or more elements.
Ex: %s, %d, %f

 Type of Specifiers in php
 A type specifier that says what type the argumnet data should data should be treated as.
  % -> a literal percent character. No argument is required
  b -> the argument is treated as an integer and presented as a binary number.
  c -> The argumnet is treated as an integer and presented as the character with that ASCII value.
  d -> The argumnet is treated as an integer and presented as a(signed) decimal integer.
   e -> The argumnet is treated as scientific notation (eg.1.2e+2).
   E -> like % e but uses uppercase letter (eg.1.2E+2).
    f -> The argumnet is treated as a float and presented as a floating -point number (local aware)
    F -> The argumnet is treated as a flaot and presented as a floating-point number (non-locale aware)
    g -> shorter of %e and %f
    G -> shorter of %E and %f
    o -> The argurment is treated as and integer and presented as an octal number
    s -> The argumnet is treated as and presented as a string
    u -> The argumnet is treated as an integer and presented as an unsigned decimal number.
x -> the argument is treated as an integer and presented as a hexadeciaml number (with lowercase letters)
X -> The argumnet is treated as an integer and presented as a hexadecimal number (with uppercase letters).
 
 type handling
 Type     #  Specifiers
########## #############         
  inteder #  d,u,c,o,X,b
  double  #  f,F,g,G,e,E
  string  #  S
  #######################
-->
<!-- Example  -->

<?php
 $a =100;
 $b = "Apple";
 $c = 2000.10;
 printf("I have %d %s and Price each %f ",$a,$b,$c);
echo "<br>";
// Type of Specifiers
//   printf("%%"); // %
//   printf("%d",$a);// 100
  
//   printf("%b",$a );// 1100100
  printf("%x",$a);// 64
  printf("%X",$a);// 64
  printf("%s",$a);// 64
?>
