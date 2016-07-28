<?php

include "../Interface/InterfaceHandleMessage.php"

class HandleMessage implements InterfaceHandleMessage
{
	public function __construct ( InterfaceClient $client )
	{
		handleMessage( $client );
	}

	private function handleMessage( $client )
	{
		switch( $client->message['message_type'] )
		{
			'text':
				new TextRespond( $client );
			'event':
				new EventRespond( $client ); 
		}
	} 
}