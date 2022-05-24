
<?php

####################################
#START ETHERSCAN API REQUEST ($url)#
####################################

$contractAddress = "0x95ad61b0a150d79219dcf64e1e6cc01f0b64c4ce";
$burnAddress = "0xdead000000000000000042069420694206942069";
$numTransactions = 10000;
$apiKey = file_get_contents('../storage/apiKey.php');

$url = "https://api.etherscan.io/api?module=account&action=tokentx&contractaddress=" . $contractAddress . "&address=" . $burnAddress . "&page=1&offset=" . $numTransactions . "&sort=asc&apikey=" . $apiKey;

#############################################
#START ETHERSCAN API REQUEST ($burnedSupply)#
#############################################

$burnedSupply = "https://api.etherscan.io/api?module=account&action=tokenbalance&contractaddress=" . $contractAddress . "&address=" . $burnAddress . "&tag=latest&apikey=" . $apiKey;

?>
