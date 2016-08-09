<?php

namespace Message;

include "../InterFace/InterfaceCommonMessage.php";

class CommonMessageVideo extends \InterfaceCommonMessage
{
	const message_type = 'Video';

	public function getMediaId()
	{
		return $this->post_obj->MediaId;
	}

	public function getThumbMediaId()
	{
		return $this->post_obj->ThumbMediaId;
	} 
}