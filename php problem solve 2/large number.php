
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>find large number</title>
</head>
<body>
    <form action="#" name="form" method="post"> 
    <label for="">Enter First Number:</label>
    <input type="number" name="num1" id=""> <br> <br>
    <label for="">Enter Second Number:</label>
    <input type="number" name="num2" id=""> <br> <br>
    <label for="">Enter Third Number:</label>
    <input type="number" name="num3" id=""> <br> <br>
    <input type="submit" name="S" id="" value="Find large number">
    </form>
</body>
</html>

<?php
if(isset($_POST['S'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    if($num1>$num2 && $num1>$num3){
          echo "largest number is :   $num1";
    }
    else if($num2>$num1 && $num2>$num3){
          echo "largest number is :   $num2";
    }
    else{
          echo "largest number is :   $num3";
    }
}

?>