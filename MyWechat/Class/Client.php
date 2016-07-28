<?php

include "AutoLoad.php"

include "../Interface/InterfaceClient.php"

class Client implements InterfaceClient
{
    
	public $message;

    public function __construct () 
    {
        $this->initWechat();
        $message = new Message();
        new HandleMessage( $this );
    }

    private function initWechat () 
    {
       new AutoLoadWechat();
    }
}