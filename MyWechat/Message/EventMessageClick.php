<?php

namespace Message;

include '../Interface/InterfaceEventMessage.php';

class EventMessageClick extends \InterfaceEventMessage
{
	const event_type = 'Click';

	public function getEventKey()
	{
		return $this->post_obj->EventKey;
	}
}