<?php

include "../InterFace/InterfaceCommonMessage.php"

class CommonMessageShortVideo extends InterfaceCommonMessage 
{
	const message_type = 'ShortVideo';

	public function getMediaId()
	{
		return $this->post_obj->MediaId;
	}

	public function getThumbMediaId()
	{
		return $this->post_obj->ThumbMediaId;
	} 
}
