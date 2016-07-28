<?php

interface InterfaceFactoryMessage
{
	public function doFactory( $message_type );
	//工厂的运行方法，返回一个对应类型的 message 类

}