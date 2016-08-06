<?php

include '../Interface/InterfaceEventMessage.php'

class EventMessageLocation extends InterfaceEventMessage
{
	const event_type = 'Location';

	public function getLatitude()
	{
		return $this->post_obj->Latitude;
	}

	public function getLongitude
	{
		return $this->post_obj->Longitude;
	}

	public function getPrecision
	{
		return $this->post_obj->getPrecision;
	}
}