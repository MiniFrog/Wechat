<?php

namespace Message;

include '../Interface/InterfaceEventMessage.php';

class EventMessageView extends \InterfaceEventMessage
{
	const event_type = 'View';

	public function getEventKey()
	{
		return $this->post_obj->EventKey;
	}
}

