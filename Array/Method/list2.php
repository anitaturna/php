<?php
$record_field = [
    "1, Turna, 7@gmail.com, 22, +57862384",
    "2, Turshi, 7@gmail.com, 25, +57862384",
];

$files = file("data.txt");
 foreach($files as $file){
    list ($x, $y, $z) = explode("," , "$file");
    echo "ID: " .$x ." "."Name: ".$y." "."G-mail: ".$z. "<br>";
 }

?>