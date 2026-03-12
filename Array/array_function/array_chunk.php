<?php
$arm =array ("a","b","c","d");

$dim = array_chunk($arm,2);
print_r($dim);
echo "<br>";
echo json.encode($dim);



?>