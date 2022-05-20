<?php

#################
#START VARIABLES#
#################

$maxSupply = "999,992,170,305,138";
$burnedSupply = number_format($jsonArray1->result / 1000000000000000000);
$supplyLeft = $maxSupply - $burnedSupply;
$percentBurned = (100 * (1 - number_format($supplyLeft / $maxSupply, 2, '.', '')));
$marketPrice = $supplyLeft / $maxSupply;
$totalBurned = $marketPrice * $burnedSupply;
$totalUsdValue = number_format(($jsonArray1->result / 1000000000000000000) * 0.000012);
$numTransactions = count($jsonArray->result);

#################
#END VARIABLES#
#################

?>