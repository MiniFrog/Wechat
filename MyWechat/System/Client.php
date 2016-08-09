<?php
namespace System;

class Client
{
    
	protected $message;
	
	protected $messageType;

    public function __construct () 
    {
        $this->initWechat();
        $messageType = new \Message\MessageType();
        $this->message = new \Message\FactoryMessage( $messageType );
        if( $this->message == NULL )
        {
            $this->messageError();
        }
    }

    private function initWechat () 
    {
        include "../Tools/AutoLoad.php";
    }

    protected function messageError()
    {
        echo "";
        exit;
    }

}