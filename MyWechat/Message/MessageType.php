<?php
namespace Message;

class MessageType implements \InterfaceMessageType
{
	protected $message_type_str;

	public function __construct()
	{
	    $post_obj = $this->checkMessage();
		if( $post_obj != false )
		{
			if( $post_obj->MsgType == 'event' )
			{
				if( isset( $post_obj->Ticket ) && $post_obj->Event == 'subscribe' )
				{
					$this->message_type_str = 'EventScanSubscribe';
				} else {
					$this->message_type_str = 'Event'. ucwords( strtolower( $post_obj->Event ) );
				}
			} else {
				$this->message_type_str = ucwords( $post_obj->MsgType );
			}

		}
	}

	protected function checkMessage()
	{
		if( isset($GLOBALS['HTTP_RAW_POST_DATA']) && !empty( $GLOBALS['HTTP_RAW_POST_DATA'] ) )
		{
			$post_obj = simplexml_load_string($GLOBALS['HTTP_RAW_POST_DATA'], 'SimpleXMLElement', LIBXML_NOCDATA);
			return $post_obj;
		} else {
			return false;
		}
	}

	public function getMessageType()
	{
		return $this->message_type_str;
	}
}


