<?php

Interface InterfaceFactoryHandleMessage 
{
	private $handle_message;
	//存放实例化的 HandleMessage 类

	public function doFactory( InterfaceMessage $message );
	//需要接收到一个实现了 InterfaceMessage 接口的对象 

}