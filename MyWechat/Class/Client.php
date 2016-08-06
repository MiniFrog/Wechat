<?php

include "AutoLoad.php"

class Client implements InterfaceClient
{
    
	protected $message;

    public function __construct () 
    {
        $this->initWechat();
        if( $this->message = new FactoryMessage( new messageType() ) )
        {
            $this->messageError();
        }
        new HandleMessage( $this->message );
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