<!-- file write-> fwrite() -->

<?php
$r = fopen("store1.txt","w");
$ur = "This is new file";
fwrite($r, $ur);
fclose($r);
?>
