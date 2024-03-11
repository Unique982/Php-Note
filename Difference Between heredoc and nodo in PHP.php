<!-- Difference Between heredoc and nodo in PHP.php
-> heredoc -> It works simimlar as double quotes. It means it can also print variable's vale.
echo <<<MYDATA -> token
    MYDATA; <- close
-> nowdoc -> It works similar as single quotes.
echo <<<'MYDATA' -> token
    MYDATA; <- close
-->
<!-- Example -->
<?php 
// heredoc
 echo<<<MYDATA
 Hello world
MYDATA;
// nowdoc
// heredoc
echo<<<'MYDATA'
Hello world
MYDATA;
?>