<?php

##################################
#START CONVERT $url API TO $jsonArray#
##################################

$json = file_get_contents($url);
$json=str_replace('},

]',"}

]",$json);

$jsonArray = json_decode($json);

############################################
#START CONVERT $burnedSupply API TO $jsonArray1#
############################################

$json = file_get_contents($burnedSupply);
$json=str_replace('},

]',"}

]",$json);

$jsonArray1 = json_decode($json);

?>