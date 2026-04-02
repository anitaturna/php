
<form  method="post"> 
    Enter yur number: <br>
    <input type="text" name="num" id=""> <br> <br>
    <input type="submit" name="submit" value="check the prime number" id="">
</form>



<?php
if(isset($_POST['submit'])){
    $num = $_POST['num'];
    $count = 0;{
    
    if($num <=1){
        echo $num . "The number is not Prime or Compositor";
    }
    else{
        for($i=2; $i<$num ; $i++){
            if($num % $i === 0){
                $count++;
                break;
            }
        }
        if($count == 0){
            echo $num. "It's Prime Number";

        }else{
            echo $num. "It's not a Prime number";
        }
    }

}}

?>