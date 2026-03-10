<?php
//numeric[ is numeric(), round(), rand(min.max);]
$num= "123.543";
var_dump(is_numeric($num));
echo "<br>";
//convert dec to int
echo intval($num);
echo "<br>";
echo round($num);
echo "<br>";
echo doubleval($num);//floatval and doublevel ek kaj kore
echo "<br>";
echo floatval($num);

?>