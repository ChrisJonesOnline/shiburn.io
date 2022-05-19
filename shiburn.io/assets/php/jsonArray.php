<?php

##########################
#START $url TO $jsonArray#
##########################

$json = file_get_contents($url);
$json=str_replace('},

]',"}

]",$json);

$jsonArray = json_decode($json);

########################
#END $url TO $jsonArray#
########################


##################################
#START $burnSupply TO $jsonArray1#
##################################

$json = file_get_contents($burnedSupply);
$json=str_replace('},

]',"}

]",$json);

$jsonArray1 = json_decode($json);

################################
#END $burnSupply TO $jsonArray1#
################################

?>