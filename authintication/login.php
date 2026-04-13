<?php
if(isset($_POST['login'])){
   $user = $_POST["username"] ;
   $pass = $_POST["pass"];
   if($user == "admin" && $pass == "123"){
    echo "login successfull";
    header ('location:main.php');
   }
   else{
    echo "invalid username or password";
   }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="#" method="post"> 
        <input type="text" name="username" placeholder="enter username"> <br> <br>
        <input type="password" name="pass" placeholder="enter password"> <br> <br>
        <input type="submit" name="login">
    </form>
</body>
</html>