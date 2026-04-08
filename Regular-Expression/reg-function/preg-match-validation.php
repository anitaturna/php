<?php

//mail validation
$email = "Bi-joy@gmail.com";
$p = "/^[a-zA-Z0-9._+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

echo preg_match($p, $email);
?>

<!--  [a-zA-Z0-9._+-] eta mainly @ এর আগে (username part)  -->
  <!-- @[a-zA-Z0-9.-] mane holo @ + domain name -->
   <!-- \.[a-zA-Z]{2,}$  mane holo এটা .com / .bd / .org part -->

   