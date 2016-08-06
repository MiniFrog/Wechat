<?php

include 'InterfaceMessage.php'

abstract class InterfaceCommonMessage extends InterfaceMessage
{
	//定义一个 message_type 用于说明类的归属

	public function getMsgId()
	{
		return $this->post_obj->MsgId;
	}
}