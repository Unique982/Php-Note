<!-- Getting File in PHP
stat() function gives information about a file. This function return an array containing information
that mostly makes sense on Unix Machin. In case of error, stst() return FALSE.
synatx: start(filename);
ec: start('text.txt');
 0 -> dev -> device number
 1 -> ino -> inode number*
 2 -> mode -> inode protection mode
 3 -> nlink -> number of links
 4 -> uid -> userid of owner*
 5 -> gid -> groupid of owner
 6 ->rdev -> device type, if inode device
 7 -> size -> size of bytes
 8 -> atime -> time of last access(Unix timestamp)
 9 -> mtime -> time of last modification(Unix timestamp)
10 -> ctime -> time of inode chnage(Unix timestamp)
11 -> blksize -> block size of filesystem IO **
12 -> bloacks -> number of 512 bytes blocks allocated **

-->
<?php
 $array = stat('text.txt');
//  echo $array['dev'];echo $array[1];
 echo $array[1];
?>