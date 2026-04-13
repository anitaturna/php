<?php
if(isset($_POST['login'])){
   $user = $_POST["username"] ;
   $pass = $_POST["pass"];

   $data = file ("data.txt");
   foreach($data as $line){
    list($_user, $_pass) = explode(",",$line);
    if(trim($_user) == $user && trim($_pass) == $pass){
        header ('location:data.php');
    }

    else{
        $msg = "invalid username or password";
        echo $msg;
        } 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login2-form</title>
</head>
<body>
    <form action="#" method="post"> 
        <input type="text" name="username" placeholder="enter username"> <br> <br>
        <input type="password" name="pass" placeholder="enter password"> <br> <br>
        <input type="submit" name="login">
    </form>
</body>
</html>