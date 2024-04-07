<!-- Copy File in PHP 
-> copy() function is used to  copy a file. This function returns
TRUE on success or False on Failure. If the destination file already exists, it will be overwritten
syntax: copy(source_file,destination_file)
ex: copy("text.txt","test.txt");
-->
<?php 
  if( copy("text.txt","test.txt")){
    echo "file copied";
  }
  else{
  echo "not copied";
  }
?>