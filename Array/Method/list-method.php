<?php
$record = [
    "1, Turna, 7@gmail.com, 22, +57862384",
    "2, Turshi, 7@gmail.com, 25, +57862384",
];

foreach( $record as $value){
    list($id, $name, $mail, $age, $phn)= explode(",", $value);
    echo "$name | $age | $mail | $phn <br>";
}

?>