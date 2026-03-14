<form method="post"> 
    Enter Marks: <input type="number" name="marks" id=""> 
    <input type="submit" name="submit" value="check grade">
</form>


<?php
if(isset($_POST['submit'])){
    $marks = $_POST['marks'];

    if($marks >= 80){
        echo "Grade: A+";
    }else if($marks >= 70){
        echo "Grade: A";
    }else if($marks >= 60){
        echo "Grade: A-";
    }else if($marks >= 50){
        echo "Grade: B";
    }else if($marks >= 40){
        echo "Grade: B-";
    }
    else{
     echo "Grade: F";
}}
?>