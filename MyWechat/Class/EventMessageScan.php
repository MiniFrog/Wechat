<?php

include '../Interface/InterfaceEventMessage.php'

class EventMessageScan extends InterfaceEventMessage
{
	const event_type = 'Scan';

	public function getEventKey()
	{
		return $this->post_obj->EventKey;
	}

	public function getTicket()
	{
		return $this->post_obj->getTicket;
	}
}