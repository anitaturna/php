
<!-- PHP md5->(convert to 128 bit) -->
 <!-- sha1 ->(convert to 160 hash) -->
<?php
$password = "1234";
//md5
echo md5($password);
echo "<br>";
echo sha1($password);
echo "<br>";
echo hash('sha224', $password);
echo "<br>";
echo hash('sha3-512', $password);
echo "<br>";
echo hash('sha3-384', $password);
echo "<br>";
echo hash('sha512/224',"Turna Nishat");
echo "<br>";
echo hash('sha512', $password);

?>