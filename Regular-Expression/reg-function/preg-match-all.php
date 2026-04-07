<?php
//prag match all (eta diye eta te condition diye check kore)

$data = "aSdth";
$p = "/^[a-zA-Z0-9]{5,8}$/"; //(^)-eta diye soro theke ($)shes porjonto check kore 
echo preg_match($p, $data); 
?>



<!-- here output is ture -->
<!-- //extually condition ta jai hok seta jodi $data te  condition fillup kore , tahole output true hobe.(jodi data te codition onojayi kom value theke jodi value actual thake taholew hobe),  


//r jodi data  thake besi but condition olpo diye run dei and shes obdhi($) jodi condition na dei, tahole output false dibe -->
<!-- r jodi $data = "aS8th@#";
$p = "/^[a-zA-Z0-9]{5,8}$/"; --> 
<!-- here output will be false -->