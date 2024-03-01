 <!-- PHP here document is another way of displaying text. A here doucment is just some text inserted directly in a php page -->
<!-- Syntax:
 echo <<token
  where token is word that begins and ends the here document. 

  ex :- echo <<< MYDATA
  welcome to show
  it is very"important" data
  MYDATA;
-->
<?php
echo <<<MYDATA
this is frist
this is "second"
this is third line.
MYDATA;
?>