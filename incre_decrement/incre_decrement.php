<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //preincrement
    echo "pre";
    echo "<br>";
    $x = 10;
    echo ++$x; //11output new value x = x+1
    echo "<br>";
    echo $x;

    echo "<br>";


    //post increment
    echo "post";
    echo "<br>";
    $y = 9;
    echo $y++;
    echo "<br>";
    echo $y;
    ?>
</body>
</html>