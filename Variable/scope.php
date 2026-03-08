<?php
$a = 15;
$b =20;
function add(){
    global $a,$b,$c;
    $c = $a+$b;
}
add();
echo $c;

?>