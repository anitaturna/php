<?php

//preg-replace (kono letter/word k porivorton kore new kichu add)
$data = "We have a plan";
$pattern2 = "/plan/i";
echo preg_replace($pattern2, "idea", $data ); 
?>