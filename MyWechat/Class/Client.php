<?php

include "AutoLoad.php"

include "../Interface/InterfaceClient.php"

class Client implements InterfaceClient
{
    
	public $message;

    public $message_type;

    public function __construct () 
    {
        $this->initWechat();
        if( !$this->message_type = new GetMessageType() )
        {
            messageError();
        }
        $this->message = new FactoryMessage( $this->message_type );
        new HandleMessage( $this );
    }

    private function initWechat () 
    {
       new AutoLoadWechat();
    }

    protected function messageError()
    {
        echo "";
        exit;
    }

}