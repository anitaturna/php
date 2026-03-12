<?php
$tolon = array(
    array(3,6,4,2), array(3,6,4,2),
    array(3,6,4,2)
);
print_r($tolon);
echo "<br>";


$mitol =[
    ["A","t", "r","r","w"],
    ["A","t", "r","r","w"],
    [3,5,2,1,7]];

// print_r($mitol);
// echo "<br>";
// echo $mitol[1][4];


for($i=0; $i<count($mitol);$i++){
    for($j=0; $j<count($mitol[$i]);$j++){
        echo $mitol[$i][$j]." " ;
       echo "<br>";
    }
    echo "<br>";
}

?>