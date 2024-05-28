<!-- Replace/Append Cookies
-> When we assign a new value to cookies, the current cookies
are not replaced. The new cookie is parsed and its name-value pair 
is appended to the list. The exception is  when you assign a new cookies with the 
same name(and same domain and path, if they exist )as a cookies that already exists. In this case the old 
value is replaced with the new. 
ex: setCookie('username', 'test');
setCookie('username', 'test');// replace

ex: setCookie('username','test'); 
setCookie('username', 'test1');//append
-->
<?php 
setCookie("username", "test");
setCookie("username", "test1");


?>