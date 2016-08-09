<?php
namespace RespondObj;

class RespondTextObj extends \InterfaceRespondObj
{
    protected $content;
    
    const message_type = 'text';
    
    public function __construct( \InterfaceMessage $message )
    {
        $this->from_user_name = $message->getToUserName();
        $this->to_user_name = $message->getFromUserName();
    }
    
    public function setContent(string $content)
    {
        $this->content = $content;
    }
    
    public function getContent()
    {
        return $this->content;
    }
}

