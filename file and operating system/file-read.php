
<?php
$result = fopen("file.txt","r") or die("file is not found");
echo fread($result, filesize("file.txt"));
fclose($result);
echo readfile("data.txt");

$r = file_get_contents("data.txt");
echo $r;
?>