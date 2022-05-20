	<div class="container">
			<p class="no-result vertical-align-outer">
				<b>Official Burn Address: </b><a href="https://etherscan.io/token/0x95ad61b0a150d79219dcf64e1e6cc01f0b64c4ce?a=0xdead000000000000000042069420694206942069" target="_blank"><?php echo $burnAddress ?></a>
				<br />
				<b>Max Supply: </b><?php echo $maxSupply; ?>
				<br />
				<b>Total Amount Burned: </b><?php echo $burnedSupply; echo " (" . $percentBurned . "%)"; ?>
				<br />
				<b>Total USD Value: </b><?php echo "≈ $" . $totalUsdValue ?>
				<br />
				<b>Total # of Burns: </b><?php echo $numTransactions ?>
				<br />
				<?php include ('assets/php/search.php'); ?>
				</p>
        </div>