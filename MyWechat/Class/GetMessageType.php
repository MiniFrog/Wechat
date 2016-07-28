<?php

class GetMessageType
{
	public function __construct()
	{
		return $this->checkMessage();
	}

	protected function checkMessage()
	{
		if( isset($GLOBALS['HTTP_RAW_POST_DATA']) && !empty( $GLOBALS['HTTP_RAW_POST_DATA'] ) )
		{
			$post_obj = simplexml_load_string($GLOBALS['HTTP_RAW_POST_DATA'], 'SimpleXMLElement', LIBXML_NOCDATA);
			return $post_obj->MsgType;
		} else {
			return NULL;
		}
	}
}