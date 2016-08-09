<?php

abstract class InterfaceRespondObj
{
    protected $to_user_name;
    
    protected $from_user_name;
    
    public function getToUserName()
    {
        return $this->to_user_name;
    }
    
    public function toUserName()
    {
        return $this->from_user_name;
    }
    
    abstract public function __construct( InterfaceMessage $message );
}

