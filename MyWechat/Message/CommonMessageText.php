<?php

namespace Message;

include "../InterFace/InterfaceCommonMessage.php";

class CommonMessageText extends \InterfaceCommonMessage 
{
	const message_type = 'Text';

	public function getContent()
	{
		return trim( $this->post_obj->Content );
	}

}