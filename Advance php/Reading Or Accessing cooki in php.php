<!-- Reading/ Accessing Cookies
we can read/access/retrieve cookies by $_COOKIE super global Variable 
Syntax: $_COOKIE['name'];
ex: $_COOKIE['username']
-->
<?php 
setcookie("username", "test", time()+3600);
echo $_COOKIE['username'];

?>