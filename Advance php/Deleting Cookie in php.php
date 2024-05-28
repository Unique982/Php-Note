<!-- Deleting Cookies
-> A cookies is deleted by setting a cookies with the same 
name(and domain an path if they were set ) with an expiration date in the past.
ex:
 setcookie("username","test",time()-3600); 
-->
<?php 
setCookie("username","test",time()+3600);
setCookie("username","test",time()-3600);

?>