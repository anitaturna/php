<?php

$mitol =[
    ["A","t", "r","r","w"],
    ["A","t", "r","r","w"],
    [3,5,2,1,7]];

print_r($mitol);
echo "<br>";
echo $mitol[1][4];
for($row =0; $row<3; $row++){
    echo "<p><b>catagory - $row</b><p>";
    echo "<ul>";
    for($col=0; $col<3; $col++){
        echo "<li>" . $mitol[$row][$col] ."</li>";
    }
    echo "</ul";
}

?>