<?php
//Updating a file
$fh = fopen("testfile.txt", 'r+') or die("Failed to open file");
$text =fgets($fh);
//fseek($fh, 18, SEEK_SET);//Will move file pointer to position 18
//fseek($fh, 5, SEEK_CUR);// If the pointer at 18, will move to position 23
fseek($fh, 0, SEEK_END);
fwrite($fh, "$text") or die ("Could not write to file");
echo "Line sucessfully inserted in testfile.txt file";
fclose($fh);


?>