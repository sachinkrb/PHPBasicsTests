
<?php
//CREATING AND WRITTING FILE ON SAME FOLDER USING PHP FUNCTIONS.
$fh =fopen("testfile.txt", 'w') or die("Failed to create file");
$text = <<<_END
Line 0 This is zero test
Line 1 This is one test
Line 2 This is two test
Line 3 This is three test
_END;
fwrite($fh, $text) or die("Could not write to file");
fclose($fh);
echo "File written successfully";
$fh = fopen("testfile.txt", 'r') or
die("File does not exist or lacks permissions");
//gets one line
$line =fgets($fh);
//Reads first 3 characters
$text =fread($fh, 3);
fclose($fh);
echo "<br>".$line;
echo "<br>".$text;
//Creates a duplicate file on same folder
copy('testfile.txt', 'testfile2.txt') or die("Could not copy file");
echo "<br>"."File successfully copied to 'testfile2.txt'";
//Renaming a file
if (!rename('testfile2.txt', 'testfile2.new'))
echo "Could not rename file";
else echo "<br>"."File successfully renamed to testfile2.new";
//Deleting a file 
if (!unlink('testfile2.new')) echo "Could not delete file";
else echo "<br>"."File 'testfile2.new' successfully deleted";

?>