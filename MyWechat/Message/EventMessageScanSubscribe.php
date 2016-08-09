<?php

namespace Message;

include '../Interface/InterfaceEventMessage.php';

class EventMessageScanSubscribe extends \InterfaceEventMessage
{
	const event_type = 'ScanSubscribe';

	public function getEventKey()
	{
		return $this->post_obj->EventKey;
	}

	public function getTicket()
	{
		return $this->post_obj->getTicket;
	}
}