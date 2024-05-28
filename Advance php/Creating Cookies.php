<!-- Cookies Creating
-> setCookies() -> setCookies() is used set/create/sent cookies. This function must appear before the <html>
    tag. 
    syntax: setCookies(name, value, expire, path, domain, secure, httponly);
    name:-> This is the name of the cookies;
    value:-> This is the value of the cookie. This value is stored on the clients computer.
    name and value is required to set cookies
Whenever you omit the optional cookies fields, the browser fills them in automatically with resonable defaults.
It describes the time when cookies will be expire. if this parameter is not set or set 0 then cookies
will automatically expire when the web Browser is closed.
ex: setCookies("username", "test", time()+3600); // expire after 1 hour
setCookies("username", "test", time()+60*60*24*10);// 10day set //

// Domain
-> It specifies the domain for which the cookies is valid. if not specified, this defaults to the host portion of the 
current documnet location. if a domain is specified , subdomains are always include.
ex: setCookies("username","test","example.com");

//Path 
-> path can be /(root) or / mydir(directory). if not specified, defaults to the current
path of the current document location, as well as it descendants.
ex: setCookies("username", "test", "/mydir");

// secure
Cookies to only be transmiited over secure protocal as https. When set to TRUE
(1), the cookies will only be set if a secure connection exists.
ex: setCookies("username", "test", time()+3600, "/", "example.com", 1);

// http only
When True(1) the cookies will be made accessible only throught the HTTP protocol.
ex: setCookies("username", "test", time()+3600, "/", "example.com", 1);
--> 

<?php
setCookie("username", "test", time()+3600);


?>