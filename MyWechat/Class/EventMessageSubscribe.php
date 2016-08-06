<?php

include '../Interface/InterfaceSpecialMessage.php'

class EventSubscribeMessage implements InterfaceEventMessage
{
	const event_type = 'Subscribe';
}