<?php

Interface InterfaceHandleMessage 
{
	public function __contruct( InterfaceClient $client );
	//需要接收到一个实现了 InterfaceClient 接口的对象 

	private function handleMessage( $client );
	//通过 $client 中 $message 的 message_type 实例化不同的回复类
}