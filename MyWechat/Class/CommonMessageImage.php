<?php

include "../InterFace/InterfaceCommonMessage.php"

class CommonMessageImage extends InterfaceCommonMessage
{
	const message_type = 'Image';

	public function getPictureUrl()
	{
		return $this->post_obj->PicUrl;
	}

	public function getMediaId()
	{
		return $this->post_obj->MediaId;
	}
}