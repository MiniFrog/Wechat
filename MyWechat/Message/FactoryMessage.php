<?php

namespace Message;

include "../Interface/InterfaceFactoryMessage.php";

class FactoryMessage extends \InterfaceFactoryMessage
{
	public function __construct( \InterfaceMessageType $messageType )
	{
		if( $messageType->getMessageType() == NULL )
		{
			return false;
		} else {
			return $this->doFactory( $messageType );
		}
	}

	protected function doFactory( \InterfaceMessageType $messageType )
	{
		$message_type = $messageType->getMessageType();
		if( strstr( $message_type, 'Event' ) )
		{
		    $product_name = '\Message\EventMessage' . substr( $message_type, 5 );
			return new $product_name;
		} else {
		    $product_name = '\Message\CommonMessage' . $message_type;
			return new $product_name;
		}
	}
}