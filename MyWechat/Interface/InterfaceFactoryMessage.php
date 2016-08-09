<?php

abstract class InterfaceFactoryMessage
{
	abstract protected function doFactory( InterfaceMessageType $messageType );
	//工厂的运行方法，返回一个对应类型的 message 类
	
	abstract public function __construct( InterfaceMessageType $messageType );
	//实例化的时候返回一个 Message 类或者 NULL

}