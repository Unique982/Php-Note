<!-- Usent Session Variable
unset($_SESSION['varName])
->This is used to free/unset/unregister a session variable.
Ex: unset($_SESSION['username])

session_unset()
-> This is used to free/unset/unregister all session variable currently
registered. It returns TRUE on success or FALSE on failure.
ex:session_unset()

Destroy Session.
.-> session_destroy()
-> It destroys all of the data associated with the current session. 
It does not unset any of the global variables associated with the session,
or unset the session cookies. To use the session variables again ,session_start() has to be called
Ex: session_destroy();

-->
<?php 
session_start();
// Set Sessin Variables
$_SESSION['username']='testingsession';
$_SESSION['password']='password';

// Get/Access Session variables
echo $_SESSION['username'] ."<br>";
 echo $_SESSION['password']."<br>" ;

 //unset single variable
//  unset($_SESSION['username']);
session_unset();

//session destroy
session_destroy();

 ?>