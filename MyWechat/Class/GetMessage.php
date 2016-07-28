<?php

include "../InterFace/InterfaceGetMessage.php"

class GetMessage implements InterfaceGetMessage 
{

	public function __construct(InterfaceClient $client)
	{
		if( isset($GLOBALS['HTTP_RAW_POST_DATA']) && !empty( $GLOBALS['HTTP_RAW_POST_DATA'] ) )
		{
			$post_obj = $GLOBALS['HTTP_RAW_POST_DATA'];
		} else {
			echo '';
			exit();
		}
		getMessage( $client, $post_obj );
	}

	private function getMessage( $client, $post_obj )
	{
		$client->message = array();
		$client->message['from_user_name'] = $post_obj->FromUserName;
		$client->message['to_user_name'] = $post_obj->ToUserName;
		$client->message['create_time'] = $post_obj->CreateTime;
		$client->message['message_type'] = $post_obj->MsgType;
		switch( $client->message['message_type']) 
		{
			case 'text':
				$client->message['content'] = trim( $post_obj->Content );
			case 'event':
				$client->message['event'] = $post_obj->Event;
			default: 
				echo '';
				exit();
		}
	}
}