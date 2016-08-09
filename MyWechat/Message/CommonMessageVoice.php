<?php

namespace Message;

include "../InterFace/InterfaceCommonMessage.php";

class CommonMessageVoice extends \InterfaceCommonMessage
{
	const message_type = 'Voice';

	public function getFormat()
	{
		return $this->post_obj->Format;
	}

	public function getMediaId()
	{
		return $this->post_obj->MediaId;
	}
}