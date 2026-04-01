<?php
$write = file_put_contents("store1.txt", "Turshi \n", FILE_APPEND);
echo "successfully";
$result = file_get_contents("store1.txt");

?>