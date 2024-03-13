<!-- Padding Specifier in Php
-> Padding specifier that says what character will be used for padding the result to the right string size.
Padding is useful for adding leading zeroes to numbers, and for right-aligning strings. To add padding, insert 
a padding specifier between the '%' character and type specifier
syntax ;
%,padding character><width><specifier>
    <padding character> this may be a spece character or a 0 (zero character). The default i sto pad with spaces. 
        An alternate padding character can be specifier by prefixing it with a single quote(').
<width> is the number of characters to pad the value out to. A positive number adds padding to the left; a negative number adds padding to right
   ex:
   printf("%010d",245) // it will print(0000000245) 
 printf("%'*10s","hello)// it will print (*****hello)
 printf("%'#-10d",245) // it wil print (245#######)   
-->
<!-- Example -->
<?php
 printf("%010d",245);
 printf("%'#-10d <br>",245);
 printf("%'*10s","hello");

?>