<?php
function text(){
    static $x = 10;
    echo $x;
    $x++;
}
text();
echo "<br>";
text();
echo "<br>";
text();

?>