<?php

namespace Message;

include '../Interface/InterfaceSpecialMessage.php';

class EventUnsubscribeMessage extends \InterfaceEventMessage
{
	const event_type = 'Unsubscribe';
}