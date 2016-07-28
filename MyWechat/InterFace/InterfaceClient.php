<?php

/**
 * InterfaceClient short summary.
 *
 * InterfaceClient description.
 *
 * @version 1.0
 * @author FROG
 */
interface InterfaceClient
{
	public $message;
	//存放收到的信息

    public function initWechat();
    //对程序进行初始化
}
