<?php

#NOTE: use php json parser to parse the shit yo
#NOTE: its in infokey


use xPaw\MinecraftPing;
use xPaw\MinecraftPingException;



class checkserver{

	public function __construct()
	{
		define('MQ_SERVER_ADDR', 'localhost');
 
	}
}


// Display everything in browser, because some people can't look in logs for errors
Error_Reporting(E_ALL | E_STRICT);
Ini_Set('display_errors', true);

include "../PHP-Minecraft-Query/src/MinecraftPing.php";
include "../PHP-Minecraft-Query/src/MinecraftPingException.php";

$Timer = MicroTime(true);

$Info = false;
$Query = null;

try {
	$Query = new MinecraftPing(MQ_SERVER_ADDR, MQ_SERVER_PORT, MQ_TIMEOUT);

	$Info = $Query->Query();

	if ($Info === false) {
		/*
			 * If this server is older than 1.7, we can try querying it again using older protocol
			 * This function returns data in a different format, you will have to manually map
			 * things yourself if you want to match 1.7's output
			 *
			 * If you know for sure that this server is using an older version,
			 * you then can directly call QueryOldPre17 and avoid Query() and then reconnection part
			 */

		$Query->Close();
		$Query->Connect();

		$Info = $Query->QueryOldPre17();
	}
} catch (MinecraftPingException $e) {
	$Exception = $e;
}

if ($Query !== null) {
	$Query->Close();
}

$Timer = Number_Format(MicroTime(true) - $Timer, 4, '.', '');
?>

