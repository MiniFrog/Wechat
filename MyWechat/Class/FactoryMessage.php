<?php

include "../Interface/InterfaceFactoryMessage.php"

class FactoryMessage implements InterfaceFactoryMessage
{
	public function doFactory( $message_type )
	{
		$post_obj = simplexml_load_string($GLOBALS['HTTP_RAW_POST_DATA'], 'SimpleXMLElement', LIBXML_NOCDATA);
		return new ucwords( $message_type ).'Message';
	}
}