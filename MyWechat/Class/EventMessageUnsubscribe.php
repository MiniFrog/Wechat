<?php

include '../Interface/InterfaceSpecialMessage.php'

class EventUnsubscribeMessage extends InterfaceSpecialMessage
{
	const event_type = 'Unsubscribe';
}