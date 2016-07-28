<?php

abstract class InterfaceMessage
{
	public $from_user_name;

	public $to_user_name;

	public $create_time;

	protected function getCommonMessage( $post_obj )
	{
		$this->$from_user_name = $post_obj->FromUserName;
		$this->$to_user_name = $post_obj->ToUserName;
		$this->create_time = $post_obj->CreateTime;
	}
	//将 post_obj 中的基本内容注入到 $client 的 $message 中

	abstract protected function getSpecialMessage( $post_obj );
	//根据 MsgType 的类型处理不同的消息种类
}