<?php

include "../InterFace/InterfaceCommonMessage.php"

class CommonMessageLocation extends InterfaceCommonMessage
{
	const message_type = 'Location';

	public function getLocationX()
	{
		return $this->post_obj->Location_X;
	}

	public function getLocationY()
	{
		return $this->post_obj->Location_Y;
	}

	public function getScale()
	{
		return $this->post_obj->Scale;
	}

	public function getLabel()
	{
		return $this->post_obj->Label;
	}
}