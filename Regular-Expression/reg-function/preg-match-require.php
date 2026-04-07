<?php

requirement:
$phone = "01783487542";
$p = "/^01[3-9][0-9]{5,8}$/";
echo preg_match($p, $phone); 
?>



<!-- here output is ture -->
 <!-- 01 first fixed and first [3-9] mane eta o fixd (mane 017,013,016..eta mean kore ) actuall ei obdhi 3 ta digit e porjontu fixed-->
  <!-- porer [0-9]mane holo er modde jeta ache condition setar ture kina check and {5,8} mane 5 thke range soro r 8 mane ager 3 digit fixed last thake 8 digit seta check korbe -->