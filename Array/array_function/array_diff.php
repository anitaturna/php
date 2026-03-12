<?php
$array1 = ["a", "b", "c"];
$array2 = ["a", "h", "i"];
$array3 = ["f", "a", "t"];
$result = array_diff($array2,$array1,$array3);
print_r($result);

?>