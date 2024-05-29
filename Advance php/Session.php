<!-- // Session
A Session is a way to store information (in variables) to be used across multiple pages.

// Strating Session
-> session_start():- It creates/starts a session or resumes the current one based on a session
identifier passed vai a GET or POST request, or passed via a cookie.
This function first checks if  a session, returns FALSE and no longer initializes &_SESSION.
syntax: session_start();

Note: The session_start() function must be the very first thing in your document, before any HTML tags.
// Set Sessin Variables
Session variables are set with the PHP global $_SESSION.These
variables can be accessed during lifetime of a session
$_SESSION['usernmae']='testcode';
$_SESSION['password']='testpassword';
$_SESSION['time']=time();
$_SESSION['cart'] = $number;

// Get/Access Session variables
Session variables are stored in the PHP global variable $_SESSION
$_SESSION['username'] ;
$_SESSION['password'] ;
$_SESSION['time'] ;
$_SESSION['cart'];
-->
<?php 
session_start();
// Set Sessin Variables
$_SESSION['username']='testingsession';
$_SESSION['password']='password';
$_SESSION['time'] = time()+3600;
$_SESSION['cart']  =12;
// Get/Access Session variables
echo $_SESSION['username'] ."<br>";
 echo $_SESSION['password']."<br>" ;
 echo $_SESSION['time']."<br>" ;
 echo $_SESSION['cart'] ."<br>";

?>