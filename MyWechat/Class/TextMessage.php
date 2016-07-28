<?php

include "../InterFace/InterfaceMessage.php"

class TextMessage extends InterfaceMessage 
{
	public $content;

	public function __construct( $post_obj ) 
	{
		getCommonMessage( $post_obj );
		getSpecialMessage( $post_obj );
		return $this;
	}

	protected function getSpecialMessage( $post_obj )
	{
		$this->content = trim( $post_obj->content );
	}
}