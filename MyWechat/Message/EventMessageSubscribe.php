<?php

namespace Message;

include '../Interface/InterfaceEventMessage.php';

class EventSubscribeMessage extends \InterfaceEventMessage
{
	const event_type = 'Subscribe';
}