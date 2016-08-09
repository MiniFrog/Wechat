<?php

abstract class InterfaceMessage
{
	protected $post_obj;

	public function __construct( $post_obj ) 
	{
		$this->post_obj = $post_obj;
		return $this;
	}

	public function getFromUserName()
	{
		return $this->post_obj->FromUserName;
	}

	public function getToUserName()
	{
		return $this->post_obj->ToUserName;
	}

	public function getCreateTime()
	{
		return $this->post_obj->CreateTime;
	}
}