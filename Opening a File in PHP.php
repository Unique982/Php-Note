<!-- Opening a File in PHP
fopen() - This function is used to open a file or url.
syntax : fopen(filename, mode,include_path,context)
filename -> It is the name of file or url.
mode -> in which mode we want to open this file ex: r,w,etc.
Include_path -> set the parameter to '1' or TRUE to specify that you want to search 
for the file in the PHP include path.
Context -> Contexts modify or enhance the behavior of the data stream from and to files.
If the open operation fails, it return FALSE and an error on failure.

Ex : $handle = fopen('test.txt","r");
$handle = fopen("php/note/test.txt","r");
$handle = fopen("php/note/test.gif","wb");
$handle = fopen("http://www.test.com","r");
$handle = fopen("ftp;//user:password@test.com/text.txt","w");

Mode
'r' -> Open for reading only, place the file pointer at the beginning of the file.
'r+' -> Open for reading and writing place the file pointer at the beginning of the file.
'w' -> Open for writing, place the file pointer at the beginning of the file and truncate the file to zero length
if the file does not exist, attempt to create it.
'w+' -> Open for reading and writing place the file pointer at the beginning of the file and truncate the file to zero length
if the file does not exist, attempt to create it.
'a' -> Open for writing only; place the file pointer at the end of the file. if the file does not ecist,
attempt to create it. In this mode, fseek() has no effect, writes are always appended.
'a+' -> Open for reading and writing place the file pointer at the end of the file. if the file does not exist, 
attempt to create it .In this mode, fseek() has only affects, the reading position  writes are always appended
'x' -> Create and open for writing only; place the file pointer at the beginning of the file. If the file already 
exists,the fopen() call will fail by returning FASLE and generating an error of level E_WAENING. if the file does not exist, attempt to create it.
'x+' ->Create and open for reading and writing; otherwise it has the same behavior as 'x';
'c' -> Open the file for writing only. if the file does not exist, it is created. if it exists, it is nether truncated (as oppoesed to 'w'), not the call 
to this function fails(as is the case with 'x'). the file pointer is positioned on the beginning of the file. this may be useful if it's desired to get advisory lock (sec flock())
before attempting to modify the file , as using 'w' colud truncate the file before the lock was obtained (if truncation is desired, ftruncate() can be used after the lock is requested).
'c+' -> open the file for reading and writing; otherwise it has the same behavior as 'c'.
'e' -> Set cl;ose-on-exec flag on the opend file descriptor. only available in php compiled on POSIX.1-2008
conform systems.
-> Different operating systems families have different line-ending covenations. When you write a text file and want to insert a line break, you need to use the 
correct line-ending characters(s) for your operating system. Unix based system use\n as line ending character, windows based system use\r\n as the line ending characters and macintosh based system
use\r as the line ending characters
-> Windows offers a text-mode translation flag('t') which will transparently translate\n to \r\n when working with the file. in contrast, you can also use 'b' to force binary mode, which will not translate
you data. To use these flags specify either 'b' or 't' as the last character of the mode parameter.
-> You should use the 't' mode if you are working with plan-text files and you use\n to delimit you line endings in your script but expect you files to readable with application such as notepad. 
You should use the 'b' in all other cases.

-> You can also use die() function while opening a file so if for any reason file can't be oprn the application will be quit.

-->
<?php 
 $handle = fopen("File Handling in PHP.txt", "r") or die("Not Found");
 
 echo "Rest of the code";

?>