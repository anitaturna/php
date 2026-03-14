<form method="post"> 
    Enter Number: <input type="number" name="num" id=""> <br> <br> 
    <input type="submit" name="submit" id="" value="check Positive or Negetive">
</form>

<?php
if(isset($_POST['submit'])){
    $num = $_POST['num'];
    if($num > 0){
        echo "Possitive";

    }
    else if($num< 0){
        echo "Negetive Number";
    } 
    else{
        echo "Number is zero";
    }
}

?>