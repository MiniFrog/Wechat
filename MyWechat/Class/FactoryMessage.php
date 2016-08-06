<?php

include "../Interface/InterfaceFactoryMessage.php"

class FactoryMessage implements InterfaceFactoryMessage
{
	public function __construct( InterfaceMessageType $messageType )
	{
		if( $messageType->getMessageType() == NULL )
		{
			return false;
		} else {
			return $this->doFactory( $messageType );
		}
	}

	protected function doFactory( InterfaceMessageType $messageType )
	{
		$message_type = $messageType->getMessageType();
		if( strstr( $message_type, 'Event' ) ){
			return new 'EventMessage' . substr( $message_type, 5 );
		} else {
			return new 'CommonMessage' . $message_type;
		}
	}
}