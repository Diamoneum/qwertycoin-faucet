<?php

$faucetTitle = "Faucet - Qwertycoin [QWC]";
$faucetSubtitle = "Every 12 hours you can get free QWC";
$logo = "images/qwccoin.png";

//Faucet address for donations
$faucetAddress = "QWC1T4qYMZxZA21QFgbcozGprLCbxxn4taVFY1qEnGfddYGaak2xG6BT6yp4gsfjJkSpqkiVa22SmNtk8cPvbv9D6fGkwRfqLo";

//Reward time in hours
$rewardEvery = "12";
//Max reward and min reward as decimals Ex: Min = 10.0 & Max = 20.0
$minReward = "5"; //Remember that the minimum for an eobot deposit is 1 QWC as reward.
$maxReward = "50"; 
//Transaction fee is set to 0.01 QWC for every request.

//Database connection
$userDB = "DATABASEUSER";
$database = "DATABASE";
$passwordDB = "PASSWORD";
$hostDB = "127.0.0.1";


//Recaptcha Keys. You can get yours here: https://www.google.com/recaptcha/
$keys = array(
	'site_key' => '',
	'secret_key' => ''
);

//Addresses that can request more than one time but with a different payment ID.
$clearedAddresses = array(
	/*"Eobot" => "22694R3K1JvGf1m98pBsbaXCA3ULQz4xdQiYHgnNAdsVDqZDjiTH9CMj6QHhKD232wPeYtfypNzp5TX5L3NcGGSmJ8pWnPJ",
	"Poloniex" => "25cZNQYVAi3issDCoa6fWA2Aogd4FgPhYdpX3p8KLfhKC6sN8s6Q9WpcW4778TPwcUS5jEM25JrQvjD3XjsvXuNHSWhYUsu",
	"HitBTC" => "24zavX3Bi2PiKGWLKh4bPGTiMsn4iHf3Y6JnKCF6V1PeBpDpuwiAMZ8di7ok6B5SQT6UXUtQgusruCoXbqUZm8VJAfq2xKK"*/
);?>