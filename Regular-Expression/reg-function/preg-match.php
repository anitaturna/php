<?php

//pattern/modifier(i-case-insensative)
//preg-match-all (eta kono latter/word koto bar ache total ta show kore dey, 
// preg-match (eta sodhu letter/word ta ache kina show kore))

$str = "This Is regular expresion";
$pattern = "/i/i";
echo preg_match($pattern, $str ); //return 1
echo "<br>";
echo preg_match_all($pattern, $str); //return total 
echo "<br> ";
?>


