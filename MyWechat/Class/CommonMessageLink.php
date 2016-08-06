<?php

include "../InterFace/InterfaceCommonMessage.php"

class CommonMessageLink extends InterfaceCommonMessage 
{
	const message_type = 'Link';

	public function getTitle()
	{
		return $this->post_obj->Title;
	} 

	public function getDescription()
	{
		return $this->post_obj->Description;
	} 
	
	public function getUrl()
	{
		return $this->post_obj->Url;
	} 
}
