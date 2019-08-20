<?php 

	require __DIR__ . '/src/MinecraftPing.php';
	require __DIR__ . '/src/MinecraftPingException.php';
	
	use xPaw\MinecraftPing;
	use xPaw\MinecraftPingException;
	
	try
	{
		$Query = new MinecraftPing( 'localhost', 25565 );
		
		print_r( $Query->Query() );
	}
	catch( MinecraftPingException $e )
	{
		echo $e->getMessage();
	}
	finally
	{
		if( $Query )
		{
			$Query->Close();
		}
	}

?>