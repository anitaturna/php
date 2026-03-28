<?php
if(isset($_POST['submit'])){
    $a = $_POST['num2'];
    $b = $_POST['num1'];
    $c = $_POST['num3'];

    if($a>=$b && $a>=$c){
        echo "largest number is A:   $a";
    }
    else if($b>=$a && $b>=$c){
        echo "largest number is B:   $b";
    }
    else{
        echo "largest number is C:   $c";
    }
}
?>



<form method="post"> 
    first number: <input type="number" name="num1" id=""> <br> <br>
    second number: <input type="number" name="num2" id=""> <br> <br>
    third number: <input type="number" name="num3" id=""> <br> <br>
    <input type="submit" name="submit" value="Check Largest" id="">

</form>