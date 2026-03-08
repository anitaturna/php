<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $X=20;  //global variablle
    function test ()
    {
        global $X;
        echo $X;
    }

    test();
    echo "<br>";

    function add(){
        $Y =50;
        global $X;
        echo $X + $Y;

    }
    add();
    ?>


</body>
</html>